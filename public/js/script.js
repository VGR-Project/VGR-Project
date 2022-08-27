$(function(){

    $('.tampilModalUbah').on('click', function(){
     
     $('#formModalLabel').html("Ubah Data User");
     $('.modal-footer button[type=submit]').html("Ubah Data");
     $('.modal-body form').attr('action','http://localhost/vgr-project/public/gamelists/ubah');
 
     const id = $(this).data('id');
 
     $.ajax({
         url: 'http://localhost/vgr-project/public/gamelists/getUbah',
         data: {id : id},
         method: 'post',
         dataType: 'json',
         success: function(data){
            $('#id_game').val(data.id);
             $('#gameTitle').val(data.title);
             $('#gameDirectors').val(data.directors);
             $('#gameRelease').val(data.release);
             $('#yearRelease').val(data.year);
             $('#gameDesc').val(data.desc_game);
             $('#gameGenres').val(data.genres);
             console.log(data);
         }
     });
 
    }); 
 
    $('.tampilModalTambah').on('click', function(){
     $('.modal-body form').attr('action','http://localhost/vgr-project/public/gamelists/tambah');
     $('#formModalLabel').html("Add Game Data");
     $('.modal-footer button[type=submit]').html("Add Game");
     $('#id_game').val("");
     $('#gameTitle').val("");
     $('#gameDirectors').val("");
     $('#gameRelease').val("");
     $('#yearRelease').val("");
     $('#gameDesc').val("");
     $('#gameGenres').val("");
    }); 
 
 });