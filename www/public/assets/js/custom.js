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
});

$('#selectproductbtn').click(function() {
  // Creates a new XMLHttpRequest object
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {

      // Defines a function to be called when
      // the readyState property changes
      var str = document.getElementById('selectproduct').value;
      if (this.readyState == 4 && 
              this.status == 200) {
            
          // Typical action to be performed
          // when the document is ready
          var myObj = JSON.parse(this.responseText);
          if (myObj[0]!=null) {
            var html ="<tr>";
            html += "<td class='productimgname'>";
            html += "<a class='product-img'>";
            html += "<img src='assets/img/product/product7.jpg' alt='product'>";
            html += "</a>";
            html += "<a>"+myObj[1]+"</a>";
            html += "</td>";
            html += "<td>10.00</td>";
            html += "<td id='price'>2000.00</td>";
            html += "<td class='text-end'>2000.00</td>";
            html += "<td>";
            html += "<a class='delete-set'><img src='../public/assets/images/delete.svg' alt='svg'></a>";
            html += "</td>";
            html += "</tr>";

            document.getElementById("tbody").insertRow().innerHTML = html;
          }
          
      }
  };

  // xhttp.open("GET", "filename", true);
  xmlhttp.open("GET", "../../../controller/gfg.php?prodname=" + document.getElementById('selectproduct').value, true);
    
  // Sends the request to the server
  xmlhttp.send();
});

function addItem() {
  var html ="<tr>";
  html += "<td class='productimgname'>";
  html += "<a class='product-img'>";
  html += "<img src='assets/img/product/product7.jpg' alt='product'>";
  html += "</a>";
  html += "<a>Apple Earpods</a>";
  html += "</td>";
  html += "<td>10.00</td>";
  html += "<td id='price'>2000.00</td>";
  html += "<td class='text-end'>2000.00</td>";
  html += "<td>";
  html += "<a class='delete-set'><img src='../public/assets/images/delete.svg' alt='svg'></a>";
  html += "</td>";
  html += "</tr>";

  document.getElementById("tbody").insertRow().innerHTML = html;
}