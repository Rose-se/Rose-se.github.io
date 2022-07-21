document.querySelector('#push').onclick = function (){
    if(document.querySelector('#newtask input').value.length == 0){
        alert('Please enter new task')
    } 
    else {
        document.querySelector('#task').innerHTML += 
        `<div class="task">
            <span id="taskname">
                ${document.querySelector('#newtask input').value}
            </span>
            <button class="delete">
                <i>Delete</i>
            </button>
            <hr>
        </div>
        `;

        var current_task = document.querySelectorAll('.delete');
        for (var i=0; i< current_task.length; i++){
            current_task[i].onclick = function (){
                this.parentNode.remove();
            }
        }
    }
}