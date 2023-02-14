function duplicateArray()
{
    var array=[];
    var elem=document.getElementById("arrayip").value;
    for(let i=0;i<elem;i++)
    {
        var elem=prompt("enter no.:")
        array.push(elem);
    }
    const duplicates=array.filter((item,index) =>array.indexOf(item));
    console.log("duplicates are:");
    console.log(duplicates);
}
