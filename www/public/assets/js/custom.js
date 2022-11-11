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
        part_id=this.querySelectorAll("*")[0].innerHTML.trim();
        cardcode=this.querySelectorAll("*")[1].innerHTML.trim();
        cardname=this.querySelectorAll("*")[2].innerHTML.trim();
        address=this.querySelectorAll("*")[3].innerHTML.trim();
    }, false);
  })(i);

$('#selectok').click(function() {
    document.getElementById("part_id").value=part_id;
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
      var qty = document.getElementById('selectqty').value;
      if (this.readyState == 4 && 
              this.status == 200) {
            
          // Typical action to be performed
          // when the document is ready
          var myObj = JSON.parse(this.responseText);
          if (myObj[0]!=null) {
            var html ="<tr>";
            html += "<td><input class='form-control' type='text' name='prod_id[]' value='"+myObj[5]+"' hidden/></td>";
            html += "<td class='productimgname' style='height:60px'>";
            html += "<a class='product-img'>";
            html += "<img src='../public/img/products/"+myObj[2]+"' alt='product' style='max-height:100%'>";
            html += "</a>";
            html += "<td><input readonly type='text' class='form-control' name='prodname[]' value='"+myObj[1]+"'/></td>";
            html += "</td>";
            html += "<td><input readonly class='form-control' type='text' name='qty[]' value='"+myObj[4]+"'/></td>";
            html += "<td><input readonly class='form-control' type='text' name='unitval[]' value='"+myObj[3]+"'/></td>";
            html += "<td><input readonly class='form-control linetotal' type='text' id='linetotal' name='linetotal[]' value='"+myObj[4]*myObj[3]+"'/></td>";
            html += "<td>";
            html += "<a class='delete-set'><img src='../public/assets/images/delete.svg' alt='svg'></a>";
            html += "</td>";
            html += "</tr>";

            document.getElementById("tbody").insertRow().innerHTML = html;

            var tamount = 0;
            $('input[name="linetotal[]"]').each(function() {
              tamount += parseInt(($(this).val() ? $(this).val() : 0));
            });
            document.getElementById('totaldata').value = tamount;
     
            
          }
          
      }
  };

  // xhttp.open("GET", "filename", true);
  xmlhttp.open("GET", "../../../controller/gfg.php?prodname=" + document.getElementById('selectproduct').value+"&qty=" + document.getElementById('selectqty').value, true);
    
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