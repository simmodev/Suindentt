//add row dow vow hh
$(document).ready(function(){
    let i = 1;
    $('#AddRow').click(function(){
        let b = i-1;
        $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
        $('#addr'+i).find('input[name="ProductName'+b+'"]').attr('name', 'ProductName'+i);
        $('#addr'+i).find('input[name="Quantity'+b+'"]').attr('name', 'Quantity'+i);
        $('#addr'+i).find('input[name="UnitPrice'+b+'"]').attr('name', 'UnitPrice'+i);
        $('#addr'+i).find('input[name="Total'+b+'"]').attr('name', 'Total'+i);
        $('#table1').append('<tr id="addr'+(i+1)+'" ></tr>');
        i++;
        $('#RowCount').val(i-1);
    });

    $("#DeleteRow").click(function(){
        if(i>1){
            $("#addr"+(i-1)).html('');
            i--;
            $('#RowCount').val(i-1);
        }
        calc();
    });

    $('#table1 tbody').on('keyup change',function(){
        calc();
    });

    $('#Tax').on('keyup change', function(){
        TotalCalc();
    });



});


function calc(){
    $('#table1 tbody tr').each(function(i, item){
        let html = $(this).html();
        if(html!=''){
            let quantity = $(this).find('input[name*="Quantity"]').val();
            let UnitPrice = $(this).find('input[name*="UnitPrice"]').val();
            $(this).find('input[name*="Total"]').val(quantity*UnitPrice);
        }
    });
    TotalCalc();
}

function TotalCalc(){
    let total = 0;
    $('.total').each(function(){
        total += parseInt($(this).val());
    });
    $('#SubTotal').val(total.toFixed(2));
    let Tax = $('#Tax').val();
    let TaxAmount = total/100*Tax;
    $('#TaxAmount').val(TaxAmount.toFixed(2));
    let GrandTotal = total+TaxAmount;
    $('#GrandTotal').val(GrandTotal.toFixed(2));
}







