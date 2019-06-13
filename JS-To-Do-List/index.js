// To do list function with id tags getting each element by id
function toDoList() {
    var item = document.getElementById("input").value;
    var ol = document.getElementById("list");
    var li = document.createElement("li");

    // Appending the li to the list 
    
    li.appendChild(document.createTextNode(item));
    ol.appendChild(li);
    document.getElementById("input").value = "";
    li.onclick = removeItem;
  }
 
  // Adding the item to the list when you press the enter key
  document.body.onkeyup = function(e) {
    if (e.keyCode == 13) {
      toDoList();
    }
  };

  // Remove item from list when you click on it
  function removeItem(e) {
    e.target.parentElement.removeChild(e.target);
  }
  
  