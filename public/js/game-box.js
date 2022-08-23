for(const element of document.querySelectorAll(".game-box")) {
    element.addEventListener("click", function() {
    window.location="/vgr-project/game/index/"+element.id;
  });
};