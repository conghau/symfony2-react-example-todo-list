import React, {PropTypes} from 'react';
import CallLingWidgetItem from './CallingWidgetItem';

class CallingWidget extends React.Component {
    constructor(props, context) {
        super(props, context);

    }

    render() {
        const callLogs = this.props.callLogs;
        return (
            <div className="portlet light sticky-bottom">
                <div className="portlet-title">
                    <div className="caption">
                        <span className="caption-subject bold">{iCareLocale['customer.member_calling']}</span>
                    </div>
                </div>

                <div className="portlet-body">
                    {
                        callLogs.map((callLog, index) => {
                            return <CallLingWidgetItem key={index} callLog={callLog}/>
                        })
                    }
                </div>
            </div>
        );
    }
}

CallingWidget.propTypes = {
    callLogs: PropTypes.array.isRequired
};

export default CallingWidget;