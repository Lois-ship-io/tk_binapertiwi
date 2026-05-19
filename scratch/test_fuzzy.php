<?php

class FuzzyTest {

  public static function calculate() {
      $kognitif = 72;
      $psikomotorik = 50;
      $sosial = 58;

      $result = self::fuzzyMamdani($kognitif, $psikomotorik, $sosial);
      echo "Result: " . $result['score'] . "\n";
  }

  public static function fuzzyMamdani(float $kognitif, float $psikomotorik, float $sosial): array
  {
    $mKognitif = [
      'rendah' => self::kognitifRendah($kognitif),
      'sedang' => self::kognitifSedang($kognitif),
      'tinggi' => self::kognitifTinggi($kognitif),
    ];

    $mPsikomotorik = [
      'belum_terampil' => self::psikomotorikBelumTerampil($psikomotorik),
      'terampil'         => self::psikomotorikTerampil($psikomotorik),
    ];

    $mSosial = [
      'butuh_bimbingan' => self::sosialButuhBimbingan($sosial),
      'baik'            => self::sosialBaik($sosial),
      'sangat_baik'     => self::sosialSangatBaik($sosial),
    ];

    $rules = self::getFuzzyRules();

    $alphaStimulasi = 0.0;
    $alphaBerkembang = 0.0;

    foreach ($rules as $rule) {
      $alpha = min(
        $mKognitif[$rule['kognitif']],
        $mPsikomotorik[$rule['psikomotorik']],
        $mSosial[$rule['sosial']],
      );

      if ($rule['output'] === 'stimulasi') {
        $alphaStimulasi = max($alphaStimulasi, $alpha);
      } else {
        $alphaBerkembang = max($alphaBerkembang, $alpha);
      }
    }

    echo "Alpha Stimulasi: $alphaStimulasi\n";
    echo "Alpha Berkembang: $alphaBerkembang\n";

    $numerator = 0.0;
    $denominator = 0.0;
    $step = 0.5;

    for ($z = 0; $z <= 70; $z += $step) {
      $muStimulasi = min(self::outputStimulasi($z), $alphaStimulasi);
      $muBerkembang = min(self::outputBerkembang($z), $alphaBerkembang);
      
      $muAgg = max($muStimulasi, $muBerkembang);

      $numerator += $z * $muAgg;
      $denominator += $muAgg;
    }

    $finalScore = $denominator > 0 ? $numerator / $denominator : 0;

    $finalLabel = $finalScore >= 60 ? 'Berkembang' : 'Stimulan';

    return [
      'score' => $finalScore,
      'label' => $finalLabel,
    ];
  }

  private static function kognitifRendah(float $x): float {
    if ($x >= 60) return 0.0;
    if ($x <= 40) return 1.0;
    return (60 - $x) / 20;
  }

  private static function kognitifSedang(float $x): float {
    if ($x <= 40 || $x >= 80) return 0.0;
    if ($x < 60) return ($x - 40) / 20;
    return (80 - $x) / 20;
  }

  private static function kognitifTinggi(float $x): float {
    if ($x <= 60) return 0.0;
    if ($x >= 80) return 1.0;
    return ($x - 60) / 20;
  }

  private static function psikomotorikBelumTerampil(float $x): float {
    if ($x >= 80) return 0.0;
    if ($x <= 40) return 1.0;
    return (80 - $x) / 40;
  }

  private static function psikomotorikTerampil(float $x): float {
    if ($x <= 40) return 0.0;
    if ($x >= 80) return 1.0;
    return ($x - 40) / 40;
  }

  private static function sosialButuhBimbingan(float $x): float {
    if ($x >= 50) return 0.0;
    if ($x <= 40) return 1.0;
    return (50 - $x) / 10;
  }

  private static function sosialBaik(float $x): float {
    if ($x <= 40 || $x >= 60) return 0.0;
    if ($x < 50) return ($x - 40) / 10;
    return (60 - $x) / 10;
  }

  private static function sosialSangatBaik(float $x): float {
    if ($x <= 50) return 0.0;
    if ($x >= 60) return 1.0;
    return ($x - 50) / 10;
  }

  private static function outputStimulasi(float $z): float {
    if ($z <= 50) return 1.0;
    if ($z >= 70) return 0.0;
    return (70 - $z) / 20;
  }

  private static function outputBerkembang(float $z): float {
    if ($z <= 50) return 0.0;
    if ($z >= 70) return 1.0;
    return ($z - 50) / 20;
  }

  private static function getFuzzyRules(): array {
    return [
      ['kognitif' => 'rendah', 'psikomotorik' => 'belum_terampil', 'sosial' => 'butuh_bimbingan', 'output' => 'stimulasi'],
      ['kognitif' => 'rendah', 'psikomotorik' => 'belum_terampil', 'sosial' => 'baik', 'output' => 'stimulasi'],
      ['kognitif' => 'rendah', 'psikomotorik' => 'terampil', 'sosial' => 'butuh_bimbingan', 'output' => 'stimulasi'],
      ['kognitif' => 'sedang', 'psikomotorik' => 'belum_terampil', 'sosial' => 'butuh_bimbingan', 'output' => 'stimulasi'],
      ['kognitif' => 'sedang', 'psikomotorik' => 'belum_terampil', 'sosial' => 'baik', 'output' => 'stimulasi'],
      ['kognitif' => 'rendah', 'psikomotorik' => 'terampil', 'sosial' => 'baik', 'output' => 'stimulasi'],
      ['kognitif' => 'rendah', 'psikomotorik' => 'belum_terampil', 'sosial' => 'sangat_baik', 'output' => 'stimulasi'],
      ['kognitif' => 'tinggi', 'psikomotorik' => 'belum_terampil', 'sosial' => 'butuh_bimbingan', 'output' => 'stimulasi'],
      ['kognitif' => 'tinggi', 'psikomotorik' => 'belum_terampil', 'sosial' => 'baik', 'output' => 'stimulasi'],
      ['kognitif' => 'sedang', 'psikomotorik' => 'terampil', 'sosial' => 'butuh_bimbingan', 'output' => 'berkembang'],
      ['kognitif' => 'sedang', 'psikomotorik' => 'terampil', 'sosial' => 'baik', 'output' => 'berkembang'],
      ['kognitif' => 'tinggi', 'psikomotorik' => 'terampil', 'sosial' => 'butuh_bimbingan', 'output' => 'berkembang'],
      ['kognitif' => 'sedang', 'psikomotorik' => 'belum_terampil', 'sosial' => 'sangat_baik', 'output' => 'berkembang'],
      ['kognitif' => 'tinggi', 'psikomotorik' => 'belum_terampil', 'sosial' => 'sangat_baik', 'output' => 'berkembang'],
      ['kognitif' => 'rendah', 'psikomotorik' => 'belum_terampil', 'sosial' => 'sangat_baik', 'output' => 'berkembang'], // Wait, R15 here says berkembang in markdown but R7 also says stimulasi! Let me check the R15 in my code.
      ['kognitif' => 'sedang', 'psikomotorik' => 'terampil', 'sosial' => 'sangat_baik', 'output' => 'berkembang'],
      ['kognitif' => 'tinggi', 'psikomotorik' => 'terampil', 'sosial' => 'baik', 'output' => 'berkembang'],
      ['kognitif' => 'tinggi', 'psikomotorik' => 'terampil', 'sosial' => 'sangat_baik', 'output' => 'berkembang'],
    ];
  }
}

FuzzyTest::calculate();
