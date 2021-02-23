
document.addEventListener('DOMContentLoaded', function(){


    var movieSection = document.querySelector('#movies-sec');
    if(movieSection){
        
      movieSection.addEventListener('click', sectionHandler);
  
      function sectionHandler(event){
       
  
        if(event.target.classList.contains('movie__watched')){
  
          var btn = event.target;
          var movieId = btn.parentNode.getAttribute('data-movie-id');
          var watchedCounter = document.querySelector('#watched-count');
          var currentCount = watchedCounter.textContent;

            $.ajax({
                method:'POST',
                url:'logic/watched_movie.php',
                data:'watched_id='+ movieId,
                contentType:'application/x-www-form-urlencoded',
                success(){
                    if(btn.classList.contains('movie__watched_active')){
                        btn.textContent='(Не смотрел)';
                        --currentCount;
                        
                    }
                    else{
                        btn.textContent='(Смотрел)';
                        ++currentCount;
                        
                    }
                    btn.classList.toggle('movie__watched_active');
                    watchedCounter.textContent = currentCount;
                }
            });
        }
        if(event.target.classList.contains('movie__del')){
            event.preventDefault();
    
            var movie = {};
    
            movie.container = event.target.parentNode;
            movie.id = movie.container.getAttribute('data-movie-id');
            movie.title = movie.container.firstElementChild.textContent;
    
            $.ajax({
              method: 'POST',
              url: 'logic/del_movie.php',
              data: 'del_id=' + movie.id,
              contentType: 'application/x-www-form-urlencoded',
              complete:
                delMovie
              
            });
    
            function delMovie(response){
              if(response){
                alert('Фильм ' + movie.title + ' был успешно удален!');
                movie.container.nextElementSibling.remove() //Удалить горизонтальную линию
                movie.container.remove()
              }else{
                alert('Во время удаления фильма что-то пошло не так');
              }
            }
    
          }



     }
 }
 if(document.forms.newMovie){
    document.forms.newMovie.addEventListener('submit', addNewMovie);

    function addNewMovie(event){
      event.preventDefault();

      var formData = new FormData(this);

      $.ajax({
        method: 'POST',
        url: 'logic/add_movie.php',
        data: formData,
        processData: false,
        contentType: false,
        // complete(response){
        //   alert(response);
        // }
      });

    }

  }




});
