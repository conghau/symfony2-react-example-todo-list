/**
 * Created by hautruong on 24/01/2017.
 */
import React, {PropTypes} from "react";
import {Row, Col, Alert} from "react-bootstrap";

class PostSingle extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div className="media ng-scope">
                <div className="thumbnail">
                    <div className="media-header">
                        <div className="media-left">
                            <img className="media-object ng-scope" alt="NXĐ"
                                 src="http://media.beat.vn/image/1701/650e24d07e1f4cc9577b5fd4f167eecf.jpg"/>
                        </div>

                        <div className="media-body">
                            <h4 className="media-heading">
                                <a className="ng-binding ng-scope"
                                   href="/user/177218">
                                    NXĐ
                                    <span className="level level-3">Dân chơi</span>
                                </a>
                            </h4>
                            <div className="heading-sub">
                    <span>
                        <a className="times" href="/post/118668"><span>3 giờ</span> <span
                            className="ng-binding">- FUN </span></a>
                        </span>
                            </div>
                        </div>
                    </div>
                    <div className="media-caption">
                        <div className="caption">
                            <div className="ng-binding">Hôm nay em đến trường,
                                mẹ dắt tay
                                từng bước ~
                            </div>
                        </div>
                    </div>
                    <div className="media-thumb">
                        <div className="sharePhotos ng-scope">
                            <div className="plusPhotos add-1 video-top">
                            </div>
                            <div className="plusPhotos add-2">
                                <div className="item-add ng-scope">
                                    <a
                                        className="ng-scope">
                                        <img
                                            src="/images/thumb-1x1.png"/>
                                    </a>
                                </div>
                                <div className="item-add ng-scope">
                                    <img
                                        src="/images/thumb-1x1.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="media-share">
                    </div>
                    <div className="media-footer">
                        <div className="msg-post">
                            <div className="info-msg">
                                <div className="pull-left">
                                    <a href="javascript:;" className="ng-scope"><span
                                        className="ng-binding">1 lượt thích</span></a>
                                </div>
                                <div className="pull-right">
                                    <span className="ng-binding">0 bình luận</span>
                                    <span className="ng-binding">0 chia sẻ</span>
                                </div>
                            </div>
                            <div className="btn-msg">
                                <ul>
                                    <li>
                                        <i className="icon ion-thumbsup"></i>Thích
                                    </li>
                                    <li><a href="javascript:;"><i className="icon ion-chatbox"></i>Bình luận</a></li>
                                    <li><a href="javascript:;"><i className="icon ion-android-share"></i>Chia sẻ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div className="cm-post">
                            <form className="ng-pristine ng-valid ng-scope">
                                <div className="ip-post">
                                    <div className="av-post">
                                        <img alt="" className="ng-scope" src="/images/beatvn.png"/>
                                    </div>
                                    <div className="tx-post">
                                        <inpu type="text"
                                              className="form-control ng-pristine ng-valid ng-empty ng-touched"
                                              placeholder="Viết bình luận"/>

                                        <input type="submit"
                                               />
                                        <div className="fi-post">
                                            <ul>
                                                <li className="ip-fi">
                                                    <label for="file-2">
                                                        <i className="icon ion-android-camera" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Đính kèm ảnh"></i>
                                                        <input type="file"
                                                        /></label>
                                                </li>
                                                <li className="ip-em">
                                                    <a href="javascript:;" data-placement="bottom"
                                                       data-toggle="popover" data-container="body" type="button"
                                                       data-html="true" popover="" ng-click="show(0)">
                                                        <i className="icon ion-android-happy"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div className="im-post">
                                        <div className="view-file">
                                            <div className="item-add ng-hide">
                                                <div className="add-inner">
                                                    <a href="#" className="del-photo"><i
                                                        className="icon ion-close"></i></a>
                                                    <a href="#"><img src="images/thumb-1x1.png"/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div className="it-post">
                                <div className="ng-scope">
                                    <div className="row-comment">
                                        <div className="av-cm">
                                            <a href="/user/55109"><img
                                                src="http://graph.facebook.com/512597095587754/picture?type=square"/></a>
                                        </div>
                                        <div className="tx-cm" ng-show="!cm.showEdit">
                                            <div className="hd-cm">
                                                <a className="ng-binding"
                                                   href="/user/55109">Tăng Đình</a>
                                                <span ng-bind-html="cm.content | filterTxt2" id="comment-0"
                                                      className="ng-binding">Người phụ nữ nguy hiểm </span>
                                            </div>
                                            <div className="bt-cm">
                                                <a ng-if="!cm.is_liked"
                                                   ng-click="likeComment($index)"
                                                   href="javascript:;" className="ng-scope">Thích</a>
                                                <span className="dot"> · </span>
                                                <span className="ng-scope"><i
                                                    className="icon ion-thumbsup ng-binding">4</i></span>
                                                <span className="dot ng-scope"> · </span>
                                                <a href="javascript:;">Trả lời</a>
                                                <span className="dot"> · </span>
                                                <span am-time-ago="'2017-01-24 21:59:49'">một ngày</span>
                                            </div>
                                            <div className="ip-post ng-hide" >
                                                <div className="av-post">
                                                    <img ng-if="!me.avatar"
                                                         className="ng-scope"
                                                         src="/images/beatvn.png"/>
                                                </div>
                                                <div className="tx-post">
                                                    <form className="ng-pristine ng-valid">
                                                        <input type="text"
                                                               className="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                               placeholder="Viết bình luận"/>
                                                        <input type="submit"/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="tx-post ng-hide" >
                                            <form className="ng-pristine ng-valid">
                                                <input type="text"
                                                       className="form-control ng-pristine ng-untouched ng-valid ng-empty" />
                                                <input type="submit"
                                                       />
                                            </form>
                                        </div>
                                    </div>
                                    <div className="row-comment reply-comment ng-scope">
                                        <div className="bt-cm">
                                            <a href="javascript:;"
                                               className="ng-binding"><i className="icon ion-forward"></i>1 câu trả
                                                lời</a>
                                        </div>
                                    </div>
                                </div>
                                <div className="show-comment ng-scope">
                                    <div className="pull-left">
                                        <a href="javascript:;">Xem thêm bình luận</a>
                                    </div>
                                    <div className="pull-right ng-binding">
                                        5 trong số 12
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

PostSingle.propTypes = {
    user: PropTypes.string,
    content: PropTypes.object
};

export default PostSingle;