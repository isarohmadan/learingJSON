$.getJSON('pizza.json',function (data) {
    let menu = data.menu;
    $.each(menu,function(i , data) {
        $('#daftar-menu').append(' <div class="col"><div class="card"><img src="img/pizza/'+ data.gambar +'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title text-center fw-bold">'+ data.nama +'</h5><p class="card-text text-center"> ' + data.deskripsi + ' <br><br><span class="fw-bold"> ' + data.harga + '</span> <br><br> <span class="fw-bold"> ' + data.kategori +' </span></p></div></div></div>')
    })
    
})

$('.nav-link').on('click',function () {
    $('.nav-link').removeClass('active' + ' text-decoration-underline ');
    $(this).addClass('active' +' text-decoration-underline ');

    let kategori = $(this).html();
    $('h1').html(kategori);


})