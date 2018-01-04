
movieID = document.FormMovieInfo.IdMovie.value;
getMovieDetails(movieID);




function getMovieDetails(movieID){
    
    axios.get('http://www.omdbapi.com/?i='+ movieID +'&apikey=e5142b95')
    .then((response) => {
       
        let movies = response.data;
        let MovieInfo = '';
            MovieInfo +=`
                    <ul class="im_flex-container">    
                        <li class="im_flex-item">    
                            <img class="im_poster"src="${movies.Poster}">
                        </li>
                        <li class="im_flex-item">
                            <p class="im_title"><strong>${movies.Title}</strong><p>
                            <br>
                            <h3>${movies.Year}<br><u>${movies.Genre}</u></h3>
                            <p><b>${movies.Actors}</b></p>                                           
                            <p><b>Rating ${movies.Ratings[0].Value}</b></p> 
                            <button class="button2" onclick = "buyticket()"> Buy Ticket</button>
                        </li>
                    </ul>
                    <div class="im_descri">
                    <p class="im_description">Description</p>
                    <p class="im_plot"> ${movies.Plot}</p>
                    </div>
                    <br><br>
               `;
        
        
        $('#movieDetails').html(MovieInfo);
    })
    .catch((err)=>{
        console.log(err);
    })
}

function buyticket(){
    window.location = 'buyticket/' + movieID;
}
