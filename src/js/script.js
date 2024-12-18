document.getElementById('avocat').addEventListener('click',function(e){
    e.preventDefault();
    document.getElementById('reservationModal').classList.remove('hidden')
});
document.getElementById('annuler-btn').onclick=function(e){
    e.preventDefault();
 document.getElementById('reservationModal').classList.add('hidden');
};





document.getElementById('confirmer-btn').onclick=function(e){

    e.preventDefault();

    document.getElementById('reservationModal').classList.add('hidden');

   
}