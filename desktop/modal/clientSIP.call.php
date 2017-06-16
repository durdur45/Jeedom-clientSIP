<div class="clearfix sipStatus">
        <div id="txtCallStatus" class="pull-right">&nbsp;</div>
        <div id="txtRegStatus"></div>
    </div>

    <div class="form-group" id="phoneUI">
        <div class="input-group">
            <div class="input-group-btn">
                <button class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" title="Show Keypad">
                    <i class="fa fa-th"></i>
                </button>
                <div id="sip-dialpad" class="dropdown-menu">
                    <button type="button" class="btn btn-primary digit" data-digit="1">1<span>&nbsp;</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="2">2<span>ABC</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="3">3<span>DEF</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="4">4<span>GHI</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="5">5<span>JKL</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="6">6<span>MNO</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="7">7<span>PQRS</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="8">8<span>TUV</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="9">9<span>WXYZ</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="*">*<span>&nbsp;</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="0">0<span>+</span></button>
                    <button type="button" class="btn btn-primary digit" data-digit="#">#<span>&nbsp;</span></button>
                    <div class="clearfix">&nbsp;</div>
                    <button class="btn btn-success btn-block btnCall" title="Send">
                        <i class="fa fa-play"></i> Send
                    </button>
                </div>
            </div>
            <input type="text" name="number" id="numDisplay" class="form-control text-center input-sm" value="" placeholder="Saisir le numero SIP" autocomplete="off" />
            <div class="input-group-btn input-group-btn-sm">
                <button class="btn btn-sm btn-primary dropdown-toggle" id="btnVol" data-toggle="dropdown" title="Volume">
                    <i class="fa fa-fw fa-volume-up"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <input type="range" min="0" max="100" value="100" step="1" id="sldVolume" />
                </div>
            </div>
        </div>
    </div>

    <div class="well-sip">
        <div id="sip-splash" class="text-muted text-center panel panel-default">
            <div class="panel-body">
                <h3 class="page-header">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span><br></h3>
            </div>
        </div>

        <div id="sip-log" class="panel panel-default hide">
            <div class="panel-heading">
                <h4 class="text-muted panel-title">Recent Calls <span class="pull-right"><i class="fa fa-trash text-muted sipLogClear" title="Clear Log"></i></span></h4>
            </div>
            <div id="sip-logitems" class="list-group">
                <p class="text-muted text-center">Aucun appel recent.</p>
            </div>
        </div>
    </div>
        <audio id="ringtone" src="plugins/clientSIP/core/template/sounds/incoming.mp3" loop></audio>
        <audio id="ringbacktone" src="plugins/clientSIP/core/template/sounds/outgoing.mp3" loop></audio>
        <audio id="dtmfTone" src="plugins/clientSIP/core/template/sounds/dtmf.mp3"></audio>
        <audio id="audioRemote"></audio>
        <script type="text/javascript" src="plugins/clientSIP/desktop/js/moment.js"></script>
        <script type="text/javascript" src="plugins/clientSIP/desktop/js/app.js"></script>
