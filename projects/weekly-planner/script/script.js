let todos = JSON.parse(todo);

let main = document.getElementById("main");



function displayCards() {
  for (let i in todos) {
    main.innerHTML += `<div id="cards" class="card cards box-shadow" style=" border-radius: 5px">
        <div
          class="d-flex justify-content-between card-header border-0 bg-white fs3"
        >
          <button class="task">Task</button>
          <div>
            <button class="border-0 bg-white">
              <i class="fa-solid fa-bookmark"></i>
            </button>
            <button class="border-0 bg-white">
              <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
          </div>
        </div>
        <div class="text-center">
          <img
            style="width: 94%; height: 9em; border-radius: unset"
            src="${todos[i].image}"
            class="img-thumbnail"
            alt="..."
          />
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">${todos[i].task}</h5>
          <p style="font-size: 16px" class="card-text">
            ${todos[i].description}
          </p>
        </div>
        <p class="ms-2 pt-2 border-top fs3" style="width: 92%">
          <i class="fa-solid fa-triangle-exclamation"></i> Priority level:
          <span
            ><button id="priority${i}"
              style=" border-radius: 5px"
              class=" priority text-white ddd bg-success border-0 ms-2 fs3"
            >
              ${todos[i].priority}
            </button></span
          >
        </p>
        <p class="ms-2 pb-2 border-bottom fs3" style="width: 92%">
          <i class="fa-solid fa-calendar-days"></i> Deadline: ${todos[i].deadline}
        </p>
        <div class="d-flex justify-content-end mb-2" style="margin-top: -0.5em">
          <div class="d-flex justify-content-around me-3" style="width: 50%">
            <a
              href="#"
              class="buttons btn btn-danger d-flex align-items-center justify-content-center me-1 d-btn"
              ><i class="fa fa-trash-can me-1"></i>Delete</a
            >
            <a
              href="#"
              class="buttons btn btn-success d-flex align-items-center justify-content-center d-btn"
              ><i class="fa fa-circle-check me-1"></i>Done</a
            >
          </div>
        </div>
      </div>`
  };


  for (let i in todos) {

  document.getElementsByClassName("priority")[i].addEventListener("click", function() {
    let count = document.getElementById(`priority${i}`);
    todos[i].priority++;
    count.innerHTML = todos[i].priority;
    
    changeColors();
  })
}

};


  displayCards();
  

  let sort = document.getElementById("sort");
  sort.addEventListener("click", function(){
  todos.sort(function(a, b){
    //ascending order
    //return parseFloat(a.priority) - parseFloat(b.priority);
    //descending order 
    return parseFloat(b.priority) - parseFloat(a.priority);
  });
  main.innerHTML= "";
  displayCards();
  changeColors()
});

let changeColors = () => {
  for (let i in todos) {
    
    let count = document.getElementById(`priority${i}`);
    count.innerHTML = todos[i].priority;
    if (todos[i].priority <= 1) {
      count.classList.add("bg-success");
    } else if (todos[i].priority <= 3) {
      count.classList.add("bg-warning");
    } else {
      count.classList.add("bg-danger");
    }
  }
};



