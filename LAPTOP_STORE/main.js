let id = $("input[name*='laptop_id']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let  laptopmaker= $("input[name*='laptop_Maker']");
    let laptopcolour = $("input[name*='laptop_colour']");
    let laptopprice = $("input[name*='laptop_price']");

    id.val(textvalues[0]);
    laptopmaker.val(textvalues[1]);
    laptopcolour.val(textvalues[2]);
    laptopprice.val(textvalues[3].replace("$", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}