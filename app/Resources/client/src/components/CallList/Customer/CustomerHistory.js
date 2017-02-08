import React, {PropTypes} from 'react';
import {Row, Col} from 'react-bootstrap';
import CallListHistoryItem from './CallListHistoryItem';
import Pagination from 'rc-pagination';
import * as globalConstant from '../../common/constant';
import LOCALE from 'rc-pagination/lib/locale/en_US';
import _ from 'lodash';

class CustomerHistory extends React.Component {

    constructor(props, context) {
        super(props, context);

        this.state = {
            pageSize: parseInt(globalConstant.PAGE_SIZE),
            pageNum: 1
        };

        this.handleClickPage = this.handleClickPage.bind(this);
    }

    handleClickPage(pageNumber){
        this.props.handleClickPage(pageNumber);
    }

    render() {
        let items = [], total = 0;
        if(_.isEmpty(this.props.callLogs) == false){
            total = this.props.callLogs.total;
            items = this.props.callLogs.items;
        }

        let pageNum = Math.ceil(_.parseInt(total) / _.parseInt(this.state.pageSize)) < this.props.pageNum ? 1 : this.props.pageNum;
        return (
            <div>
                <Row className="m-b-sm">
                    <Col md={4}><strong>{iCareLocale['call_history.telesale_rep_call']}</strong></Col>
                    <Col md={4}><strong>{iCareLocale['call_history.call_time']}</strong></Col>
                    <Col md={4}><strong>{iCareLocale['call_history.duration']}</strong></Col>
                </Row>
                <CallListHistoryItem callHistoryList = {items}/>
                {(total > 0) ? <Pagination className="ant-pagination" defaultCurrent={1}
                    current={pageNum}
                    showTotal={(total, range) => `${range[0]} - ${range[1]} of ${total} items`}
                    total={_.parseInt(total)}
                    pageSize={_.parseInt(globalConstant.PAGE_SIZE)} locale={LOCALE}
                    onChange={this.handleClickPage}/> : <div></div> }
            </div>
        );
    }
}

export default CustomerHistory;