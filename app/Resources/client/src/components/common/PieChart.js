import React from 'react';
var Pie = require('react-chartjs').Pie;

var PieChart = React.createClass({
  render: function () {
    var data = [
      {
        value: this.props.error,
        color: '#E26A6A',
        label: 'Errors'
      },
      {
        value: this.props.success,
        color: '#44b6ae',
        label: 'Success'
      }];
    const options = {
      animation: {
        animateScale: true
      }
    };
    return <Pie data={data} options={options} />;
  }
});
export default PieChart;
