$('#selectclient tbody tr').click(function() {
    $(this).addClass('bg-success').siblings().removeClass('bg-success');
});

var trs = document.querySelectorAll("tr");
let cardcode;
let cardname;
let address;
for (var i = 0; i < trs.length; i++)
  (function (e) {
    trs[e].addEventListener("click", function () {
        cardcode=this.querySelectorAll("*")[1].innerHTML.trim();
        cardname=this.querySelectorAll("*")[2].innerHTML.trim();
        address=this.querySelectorAll("*")[3].innerHTML.trim();
    }, false);
  })(i);

$('#selectok').click(function() {
    document.getElementById("cardcode").value=cardcode;
    document.getElementById("cardname").value=cardname;
    document.getElementById("address").value=address;
})
  