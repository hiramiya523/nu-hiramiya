// CDN読み込み
let head = document.getElementsByTagName('head');
let script = document.createElement('script');
script.setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js');
script.setAttribute('type', 'text/javascript');
document.head.appendChild(script);

// スクリプト読み込み時
script.addEventListener('load', () => {
  let ctx = document.getElementById('mychart');
  let myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        label: 'Red',
        data: [20, 35, 40, 30, 45, 35, 40],
        borderColor: '#f88',
      }, {
        label: 'Green',
        data: [20, 15, 30, 25, 30, 40, 35],
        borderColor: '#484',
      }, {
        label: 'Blue',
        data: [30, 25, 10, 5, 25, 30, 20],
        borderColor: '#48f',
      }],
    },
    options: {
      y: {
        min: 0,
        max: 60,
      },
    },
  });

  // 数値確認
  console.log(myChart.data);
})


let btn1 = document.querySelector('#btn1');
btn1.addEventListener('click', () => {
  let cta = document.querySelector('#mychart');
  console.log(cta);
});
