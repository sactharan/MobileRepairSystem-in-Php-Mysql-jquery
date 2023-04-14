function GetPrint() {
    /*For Print*/
    window.print();
}

//service 
function BtnservAdd() {
    /*Add Button*/
    var v = $("#TRow").clone().appendTo("#TBody");
    $(v).find("input").val('');
    $(v).removeClass("d-none");
}

function BtnservDel(v) {
    /*Delete Button*/
    $(v).parent().parent().remove();
    // GetTotal();
}

function ServCalc(v) {
    /*Detail Calculation Each Row*/
    var index = $(v).parent().parent().index();

    var qty = document.getElementsByName("serv_qty")[index].value;
    var rate = document.getElementsByName("serv_unit_price")[index].value;

    var amt = qty * rate;
    document.getElementsByName("service_amount")[index].value = amt;

    GetTotalService();
}

function GetTotalService() {
    /*Footer Calculation*/

    var sum = 0;
    var amts = document.getElementsByName("service_amount");

    for (let index = 0; index < amts.length; index++) {
        var amt = amts[index].value;
        sum = +(sum) + +(amt);
    }

    document.getElementById("total_service_cost").value = sum;
    GetTotal();
}

//parts
function BtnAdd() {
    /*Add Button*/
    var v = $("#TRow_1").clone().appendTo("#TBody_1");
    $(v).find("input").val('');
    $(v).removeClass("d-none_1");
}

function BtnDel(v) {
    /*Delete Button*/
    $(v).parent().parent().remove();
    GetTotal();
}

function Calc(v) {
    /*Detail Calculation Each Row*/
    var index = $(v).parent().parent().index();

    var qty = document.getElementsByName("parts_qty")[index].value;
    var rate = document.getElementsByName("parts_amount")[index].value;

    var amt = qty * rate;
    document.getElementsByName("part_amount")[index].value = amt;

    GetTotalParts();
}

function GetTotalParts() {
    /*Footer Calculation*/

    var sum = 0;
    var amts = document.getElementsByName("part_amount");

    for (let index = 0; index < amts.length; index++) {
        var amt = amts[index].value;
        sum = +(sum) + +(amt);
    }

    document.getElementById("total_parts_cost").value = sum;
    GetTotal();

}

// function GetTotal()
// {
//     var sum = 0;
//     var amts = document.getElementsByName("total_service_cost");

//     for (let index = 0; index < amts.length; index++) {
//         var amt = amts[index].value;
//         sum = +(sum) + +(amt);
//     }

//     document.getElementById("total_cost").value = sum;
// }





