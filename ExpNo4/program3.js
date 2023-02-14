function comp()
{
    var r1=parseInt(document.getElementById('real1').value);
    var i1=parseInt(document.getElementById('im1').value);
    var r2=parseInt(document.getElementById('real2').value);
    var i2=parseInt(document.getElementById('im2').value);
    const complex=[{real:r1,im:i1},{real:r2,im:i2}];
    var sum=(complex[0].real+complex[1].real)+"+i"+(complex[0].im+complex[1].im);
    alert("resulting: complex no:"+sum);
}