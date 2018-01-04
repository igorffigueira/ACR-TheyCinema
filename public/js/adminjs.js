$(document).ready(()=>{
    $('#SearchForm').on('submit', (e) =>{
        let searchText = $('#searchText').val();
        getMovies(searchText);
        e.preventDefault();
 })
});
//INSERT MOVIES ON DATABASE
function getMovies(searchText) {
axios.get('http://www.omdbapi.com/?s='+ searchText +'&apikey=e5142b95')
    .then((response) => {
       //console.log(response);
        let movies = response.data.Search;
        let outputMovies = '';
        $contador=0;
        $.each(movies, (index, movie)=>{
            if($contador<9){
                $contador=$contador+1;
            outputMovies += `
                <ul><li>  
                <img  class="Postermovie1"  src="${movie.Poster}">
                <h5 class="texto1">${movie.Title}</h5>
                <a onclick="movieSelect('${movie.Title}','${movie.imdbID}','${movie.Poster}')" class= "btn cccc" href="javascript:void(0)">ADD Movie</a>
                </ul></li>

            `;
         } });
        
        $('#showMovies').html(outputMovies);
    })
    .catch((err)=>{
        console.log(err);
    })
}
function movieSelect(movie, ids, poster){
// console.log(movie);
$.ajax({
url: '/savemovie',
data: { dataTitleMovie: movie,
        dataIdMovie:    ids,
        dataIdSala: 1,
        dataUrlMovie: poster,
},
headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
method: 'post'
 }).done(function(result){
    window.location.reload(true);
});
}

//DELETE MOVIES ON DATABASE

function deleteMovie(idMovie){
    $.ajax({
        url: '/delete',
        data:{
                dataIdMovie: idMovie 
             },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: 'post'
         }).done(function(result){
            window.location.reload(true);
        });
}

function ConectMoviesSalas(){
    var idMovie = $("#id_movie").val();
    var idSala = $("#id_sala").val();

    //console.log(idMovie +"    "+ idSala);

    $.ajax({
        url: '/conectMS',
        data: { dataIdMovie: idMovie,
                dataIdSala:    idSala 
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: 'post'
         }).done(function(result){
            setTimeout( function ( ) {window.location.reload(true); } );
        });  
    }

function LimpaSala(idSala){
    $.ajax({
        url: '/ClearSala',
        data: {
                dataIdSala:    idSala 
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: 'post'
         }).done(function(result){
            setTimeout( function ( ) {window.location.reload(true); } );
        });  
    }