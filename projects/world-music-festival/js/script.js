let maiden = 140;
let metallica = 240;
let stones = 170;
let sabbath = 40;
let ac_dc = 245;
let beatles = 139;
let floyd = 210;
let rush = 140;
let zepelin = 160;

let fest_day1 = ["Iron Maiden", "Metallica", "The Roling Stones"];

let fest_day2 = ["Black Sabbath", "The Beatles", "AC/DC"];

let fest_day3 = ["Pink Floyd", "Rush", "Led Zeppelin"];

console.log(
  "On the first day of the festival, I was lucky to watch bands " +
    fest_day1[0] +
    ", " +
    fest_day1[1] +
    " and " +
    fest_day1[2] +
    "."
);
("<br><br>");
let day1cost = maiden + metallica + stones;
let day2cost = sabbath + ac_dc + beatles;
let day3cost = floyd + rush + zepelin;

console.log(
  "Then I watched the bands " +
    fest_day2[0] +
    ", " +
    fest_day2[1] +
    " and " +
    fest_day2[2] +
    " and it cost me " +
    day2cost +
    "€ in total that day."
);

let totalcost = day1cost + day2cost + day3cost;

console.log(
  "I was a bit tired on the third day but it was so much worth it to watch the bands " +
    fest_day3[0] +
    ", " +
    fest_day3[1] +
    " and " +
    fest_day3[2] +
    " and I spent " +
    totalcost +
    "€ for the three days of the festival."
);

let discount30 = totalcost * (30 / 100);

let difference = totalcost - discount30;

console.log(
  "If I had booked the concert with enough time in advance, it would have cost me a total of " +
    difference +
    "€ and I would have saved " +
    discount30 +
    "€."
);

var year = document.getElementById("year");

year.innerHTML = new Date().getFullYear();
