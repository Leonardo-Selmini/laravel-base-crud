function confirmDelete(event){
  if(!(confirm("Delete comic?"))){
    event.preventDefault();
  }
}