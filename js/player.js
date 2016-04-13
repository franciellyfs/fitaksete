var player = $(".player").jPlayer({

    play: function(){
        // quando começar a tocar, escrever o nome da faixa sendo executada 15 
        $('.player-current-track').text(playlist[currentTrack].artist+' - '+playlist[currentTrack].title);
    }

});