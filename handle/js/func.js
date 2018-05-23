
function add_order(){
            var xmlhttp;
            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }
             xmlhttp.onreadystatechange = function()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                   document.getElementById("main-content").innerHTML = xmlhttp.responseText;
               }
            };             
           xmlhttp.open("GET", "add.php", true);
            xmlhttp.send();
        }

function back(){
            var xmlhttp;
            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }
             xmlhttp.onreadystatechange = function()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    document.getElementById("main-content").innerHTML = xmlhttp.responseText;
                }
            };
           
            xmlhttp.open("GET", "dsdonhang.php", true);
            xmlhttp.send();
        }

function chiTiet(i) {
    var id="js-madh-"+i;
	maDonHang =  document.getElementById(id).innerText;
	// console.log(maDonHang);

	var xmlhttp;
        if (window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }
         xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("main-content").innerHTML = xmlhttp.responseText;
            }
        };

        xmlhttp.open("GET", "chitiet.php?id="+maDonHang, true);
        xmlhttp.send();
}
function xoa() {
    if(confirm('Đơn hàng này sẽ bị xóa trong csdl?'))
    document.formcapnhat.action = "xulyxoa.php";
}


$("#search-submit").click(function(){
    var searchText = $("#search-text").val();
    // alert(searchText);
    var xmlhttp;
            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }
             xmlhttp.onreadystatechange = function()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                   document.getElementById("part-content").innerHTML = xmlhttp.responseText;
               }
            };             
           xmlhttp.open("GET", "search.php?id="+searchText, true);
            xmlhttp.send();

});

