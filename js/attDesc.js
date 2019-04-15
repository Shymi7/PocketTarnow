var showDesc = document.getElementsByClassName("attractionElement");
var content = document.getElementsByClassName("attractionContent");

console.log(showDesc);

var displayContent = [];
for( var i = 0 ; i < content.length ; i++ )
{
    displayContent["idek" + i] = true;
}

for(var i = 0 ; i < showDesc.length ; i++ )
{
    showDesc[i].addEventListener("click", showDescription );
}
function showDescription()
{
    console.log(this.id);
    console.log(displayContent);
    if( displayContent[this.id] == true )
    {
        displayContent[this.id] = false;
        this.children[2].style.display="none";
        this.children[1].style.display="block";

    }
    else
    {
        displayContent[this.id] = true;
        this.children[2].style.display="block";
        this.children[1].style.display="none";
    }
}