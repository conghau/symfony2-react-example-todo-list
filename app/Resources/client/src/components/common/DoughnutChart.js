import React from 'react';
var Doughnut = require('react-chartjs').Doughnut;

var DoughnutChart = React.createClass({
  render: function () {
    var data = [
      {
        value: this.props.error,
        color: '#E26A6A',
        label: 'Employees have errors'
      },
      {
        value: this.props.success,
        color: '#44b6ae',
        label: 'Employees have imported'
      }];
    const options = {
      animation: {
        animateScale: true
      }
    };
    return <Doughnut height='250' width='250' data={data} options={options} />;
  }
});
export default DoughnutChart;
