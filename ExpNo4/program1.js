function combinations()
{
    str1=document.getElementById('stringip').value;
    console.log(str1);
    let possible_comb=[];
    for(let i=0;i<str1.length;i++)
    {
        for(let j=i+1;j<str1.length+1;j++)
        {
            var element=str1.slice(i,j);
            console.log(element);
        }
    }
    console.log("done");
}