<!DOCTYPE html>
<html>
<head>
    <title>Laporan Perkembangan Anak</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            font-size: 14px;
        }

        /* Header / Kop Surat */
        .kop-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 4px double #333;
            padding-bottom: 8px;
            margin-bottom: 25px;
        }
        .kop-logo-left {
            width: 15%;
            text-align: left;
            vertical-align: middle;
        }
        .kop-logo-right {
            width: 15%;
            text-align: right;
            vertical-align: middle;
        }
        .kop-text-center {
            width: 70%;
            text-align: center;
            vertical-align: middle;
            line-height: 1.35;
        }
        .kop-logo-img {
            height: 80px;
            width: auto;
        }
        .kop-title-1 {
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            color: #444;
            letter-spacing: 0.5px;
            margin: 0;
        }
        .kop-title-2 {
            font-size: 17px;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            margin: 3px 0 0 0;
        }
        .kop-detail {
            font-size: 12px;
            color: #555;
            margin: 2px 0 0 0;
            font-weight: 500;
        }

        /* Content Info */
        .info-container {
            margin-bottom: 30px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 5px 10px;
            vertical-align: top;
        }
        .info-label {
            width: 150px;
            font-weight: bold;
            color: #444;
        }
        .info-separator {
            width: 10px;
        }

        /* Title */
        .report-title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 25px;
            text-decoration: underline;
            text-underline-offset: 5px;
            color: #333;
        }

        /* Main Table */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .table th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: bold;
            text-align: center;
            border: 1px solid #ccc;
            padding: 12px;
            text-transform: uppercase;
            font-size: 12px;
        }
        .table td {
            border: 1px solid #ccc;
            padding: 10px 15px;
            text-align: left;
            vertical-align: middle;
        }
        .table-row-even {
            background-color: #fcfcfc;
        }
        .text-center { text-align: center !important; }
        .text-right { text-align: right !important; }
        .font-bold { font-weight: bold; }

        /* Summary Section */
        .summary-row {
            background-color: #f1f5f9;
            font-weight: bold;
        }

        /* Notes Section */
        .notes-section {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
            background-color: #fff;
            position: relative;
        }
        .notes-label {
            position: absolute;
            top: -12px;
            left: 15px;
            background-color: #fff;
            padding: 0 10px;
            font-weight: bold;
            color: #333;
        }
        .notes-content {
            margin: 0;
            line-height: 1.6;
            min-height: 60px;
            white-space: pre-wrap;
        }

        /* Signature */
        .signature-table {
            width: 250px;
            margin: 45px auto 0 auto;
            border-collapse: collapse;
        }
        .signature-box {
            text-align: center;
        }
        .signature-title {
            font-size: 14px;
            color: #333;
            margin: 0;
            line-height: 1.4;
        }
        .signature-img {
            width: 95px;
            height: 95px;
            margin: 8px auto;
            display: block;
        }
        .signature-name {
            font-weight: bold;
            font-size: 14px;
            color: #333;
            margin-top: 5px;
        }

    </style>
</head>
<body>
    <table class="kop-table">
        <tr>
          <td class="kop-logo-right">
                <img src="{{ public_path('assets/img/logo-tk-1.png') }}" class="kop-logo-img" alt="Logo Yayasan">
            </td>
            <td class="kop-text-center">
                <div class="kop-title-1">Taman Kanak-Kanak Bina Pertiwi</div>
                <div class="kop-title-2">"YAYASAN HARAPAN BUNDA KELAPA DUA"</div>
                <div class="kop-detail">Perumahan Dasana Indah Blok RE 3 No.16</div>
                <div class="kop-detail">Jl. Wijaya Kusuma Barat RT. 07/RW. 18 &ndash; Kelapa Dua &ndash; Tangerang</div>
                <div class="kop-detail">Hp. 0856 9113 1730</div>
            </td>
            <td class="kop-logo-left">
                <img src="{{ public_path('assets/img/logo-tk-no-bg.png') }}" class="kop-logo-img" alt="Logo TK">
            </td>
        </tr>
    </table>

    <div class="report-title">LAPORAN PERKEMBANGAN ANAK</div>

    <div class="info-container">
        <table class="info-table">
            <tr>
                <td class="info-label">Nama Anak</td>
                <td class="info-separator">:</td>
                <td>{{ $record->student->name ?? '-' }}</td>
            </tr>
            <tr>
                <td class="info-label">Kelas</td>
                <td class="info-separator">:</td>
                <td>{{ $record->student->class->student_class ?? '-' }}</td>
            </tr>
            <tr>
                <td class="info-label">Periode</td>
                <td class="info-separator">:</td>
                <td>{{ \Carbon\Carbon::parse($record->period)->isoFormat('MMMM Y') }}</td>
            </tr>
        </table>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th width="8%">No</th>
                <th width="62%">Aspek Perkembangan</th>
                <th width="30%">Nilai (0-100)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Psikomotorik</td>
                <td class="text-center">{{ $record->psikomotorik }}</td>
            </tr>
            <tr class="table-row-even">
                <td class="text-center">2</td>
                <td>Kognitif</td>
                <td class="text-center">{{ $record->kognitif }}</td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td>Sosial Emosional</td>
                <td class="text-center">{{ $record->sosial_emosional }}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="summary-row">
                <td colspan="2" class="text-right">Rata-Rata</td>
                <td class="text-center">{{ $record->score }}</td>
            </tr>
            <tr class="summary-row">
                <td colspan="2" class="text-right">Status Perkembangan</td>
                <td class="text-center">{{ $record->status }}</td>
            </tr>
        </tfoot>
    </table>

    <div class="notes-section">
        <span class="notes-label">Catatan</span>
        <p class="notes-content">{{ $record->notes ?? '-' }}</p>
    </div>

    <table class="signature-table">
        <tr>
            <td>
                <div class="signature-box">
                    <div class="signature-title">Mengetahui,</div>
                    <div class="signature-title" style="margin-bottom: 5px;">Kepala Sekolah</div>
                    <img src="{{ public_path('assets/img/ttd.png') }}" class="signature-img" alt="Tanda Tangan QR">
                    <div class="signature-name">Laila Syaflina, A.Md.</div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
