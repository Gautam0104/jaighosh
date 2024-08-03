<div class="container py-5" id="disclaimer-section">
    <div class="row d-flex justify-content-center">
        <div class="col-md-2 border d-flex justify-content-center py-2 bg-light"><span style="color:#ff4f9d;font-size:20px;">DISCLAIMER</span></div>
        <div class="col-md-8 border">
          <span class="align-baseline"><marquee id="marq" behavior="scroll" direction="left"><p class="align-baseline my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem perspiciatis, repellat ab ut sed in recusandae autem est reprehenderit rem.</p></marquee></span>
        </div>
        <div class="col-md-1  border d-flex justify-content-center  py-2 bg-light">
            <span  class="me-2" style="color:#ff4f9d;"><i id="pause-btn" class="fas fa-pause" onclick="toggleMarquee();"></i><i id="play-btn" class="fas fa-play" onclick="toggleMarquee();" style="display:none;"></i></span>
            <span class="ms-2" style="color:#ff4f9d;"><i class="fas fa-trash" onclick="hidedisclaimer();"></i></span>
        </div>
    </div>
</div>
<script>
    var state = 'play';
    var playBtn = document.getElementById("play-btn");
    var pauseBtn = document.getElementById("pause-btn");
function toggleMarquee() {
    var marquee = document.getElementById("marq");
    if (state === 'play') {
        marquee.stop();
        state = 'stop';
        playBtn.style.display = "block";
        playBtn.style.padding = "5px"
        pauseBtn.style.padding = "5px"
        pauseBtn.style.display = "none";
    } else {
        marquee.start();
        state = 'play';
        playBtn.style.display = "none";
        pauseBtn.style.display = "block";
    }

}
function hidedisclaimer() {
    var disclaimer = document.getElementById("disclaimer-section");
    disclaimer.style.display = "none";
}
</script>