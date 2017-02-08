import React, {PropTypes} from 'react';
import {Modal} from 'react-bootstrap';
import EnterCallResult from './EnterCallResult';

class CallingWidgetItem extends React.Component {

    constructor(props, context) {
        super(props, context);
        this.state = {
            showModal: false,
            callLog: {}
        };

        this.open = this.open.bind(this);
        this.close = this.close.bind(this);
        this.handleUpdateCallLog = this.handleUpdateCallLog.bind(this);
    }

    close() {
        this.setState({
            showModal: false
        });
    }

    open() {
        this.setState({
            showModal: true
        });
    }

    handleUpdateCallLog(id, data){
        let th = this;
        this.context.handleUpdateCallLog(id, data).then(res => {
            if (res.code == 200) {
                th.setState({showModal: false}, () => {
                    this.context.handleSetActiveCalling({});
                });
            } else {
                // TODO: Add action
            }
        });
    }

    render() {
        const callLog = this.props.callLog;
        return(
            <div>
                <div className="portlet box grey">
                    <div className="portlet-title">
                        <div className="caption">
                            <span className="circle-end-call">
                                <i className="material-icons shake">call_end</i>
                            </span>
                            <a href="javascript:;">
                                {callLog.customer_name}
                            </a>
                        </div>
                    </div>
                </div>
                <Modal
                    show={this.state.showModal || false}
                    bsSize="large"
                    backdrop = "static"
                    keyboard={false}
                    aria-labelledby="contained-modal-title-lg">
                    <Modal.Header closeButton>
                        <Modal.Title>
                            {iCareLocale.select_call_result}
                        </Modal.Title>
                    </Modal.Header>
                    <Modal.Body className="bg-default">
                        <EnterCallResult handleUpdateCallLog={this.handleUpdateCallLog} callLog={this.props.callLog}/>
                    </Modal.Body>
                </Modal>
            </div>
        );
    }
}

CallingWidgetItem.propTypes = {
    callLog: PropTypes.object.isRequired
};

CallingWidgetItem.contextTypes = {
    handleSetActiveCalling: PropTypes.func,
    handleUpdateCallLog: PropTypes.func
};

export default CallingWidgetItem;