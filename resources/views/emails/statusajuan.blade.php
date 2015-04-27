@if($ajuan->status === 'Diterima')
    <!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <h2>Persetujuan {{$ajuan->jenis_ajuan}} {{$ajuan->nama_koperasi}}</h2>

            <div>
                Ajuan anda telah terverifikasi dan telah disetujui.<br><br>
                Terima kasih telah menghubungi Koperasi Bandung.
            </div>

        </body>
    </html>
@else
    <!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta charset="utf-8">
        </head>
        <body>
            <h2>Penolakan {{$ajuan->jenis_ajuan}} {{$ajuan->nama_koperasi}}</h2>

            <div>
                Ajuan anda gagal terverifikasi dan ditolak. Silahkan hubungi petugas kami untuk informasi lebih lanjut.<br><br>
                Terima kasih telah menghubungi Koperasi Bandung.
            </div>

        </body>
    </html>
@endif