var db = firebase.firestore(); //inisialisasi cloud firestore

function sendMessage() {
    var message = document.getElementById("input-pesan").value; //mendapatkan value message dari hasil input user
    var timestamp = new Date().getTime(); //mendapatkan timestamp

    //contoh link yang digenerate dari aplikasi tobehonest.apk : http://domain/tobehonest/?id=s0RtB3M1raUEzlj7YNJc&user=zulfikaralwilubis
    var url = window.location.search; //mendapatkan format link keseluruhan
    var doc_id = url.split('&')[0].slice(4); //mendapatkan id dengan memisahkan kedua parameter yang dikirim, lalu diambil parameter id dari array pertama.

    //menambahkan message kedalam dokumen berdasarkan id yang didapatkan dari parameter link ?id=(id)
    db.collection('users').doc(doc_id).collection('inbox').add({
        'messages' : message,
        'timestamp' : timestamp
    })
    .then(function(){
        window.location.reload();
        alert('Pesan berhasil dikirim!');
    })
    .catch(function(error){
        console.log('Error: ', error);
    })
}