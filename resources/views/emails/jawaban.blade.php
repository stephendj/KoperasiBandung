<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            Salam sejahtera Bpk/Ibu {{$pertanyaan->nama}},<br>
            Berikut adalah jawaban dari pertanyaan yang anda kirimkan : <br><br>
            <b>Pertanyaan :</b><br>
            {{$pertanyaan->pertanyaan_user}}<br><br>
            <b>Jawaban :</b><br>
            {{$pertanyaan->jawaban}}<br><br>
            Terima kasih telah menghubungi Koperasi Bandung.
        </div>

    </body>
</html>