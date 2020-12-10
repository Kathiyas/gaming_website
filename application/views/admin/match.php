<?php var_dump($teams) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon-16x16.png">
    <title>DashBoard</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style-test.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
    <!-- fonts -->
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/carousel.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.9/spectre.min.css" integrity="sha512-9RIcp1f4CE6dEuYX9085tXaEbYd1ap04d2Av1ub/dwuT33WbfbHStDdQ+shKrp5wzZzleh5DOg+7ABSnaQP/nQ==" crossorigin="anonymous" />
    
</head>
<body>
    <header id="header" class="map-ban-border">
        <div class="container-fluid">
            
        </div>
    </header>
    <section class="container-fluid tabs-sec">
        <div class="tabs">
            <nav class="map-ban-border">
                <a href="#" class="hidden"></a>
                <a class="map-ban-border" href="dashboard-test.html"><i class="fas fa-helicopter"></i><span>Single Match</span></a>
                <a class="teams-tab" href="dashboard-test.html"><i class="fas fa-user-secret"></i><span>Teams</span></a>
            </nav>
            <!-- <section class="front-content visible-sec">
            </section> -->
            <div class="content">
                <div class="match1-subsec">
                    <div class="match1-bg">
                        <div class="match-img px-4">
                            <img src="images/5f30678590ab97.446562299141.png" alt="">
                            <h2>MATCH 1</h2>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#"><i class="fas fa-gamepad"></i> Rainbow Six Siege</a></li>
                            <li><a href="#"><i class="fas fa-calendar-plus"></i>  2020-08-09 21:09:56</a></li>
                            <li><a href="#" data-tooltip="Club_House

                                Coastline
                                
                                Consulate
                                
                                Dostoyevsky
                                
                                Oregon
                                
                                Theme
                                
                                Villa"><i class="fas fa-map"></i> Competitive</a></li>
                            <li><a href="#"><i class="fas fa-sitemap"></i>  Best of 3</a></li>
                            <li><a href="#"><i class="fas fa-dice-d20"></i>  Bomb</a></li>
                        </ul>
                    </div>
                </div>
                <div class="icon-row text-right d-block px-4 py-1 mt-4">
                    <a href="#"><i class="fas fa-trash"></i></a>
                    <a href="#"><i class="fas fa-clone"></i></a>
                    <a href="#"><i class="fas fa-undo"></i></a>
                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                    <a href="#"><i class="fas fa-gamepad"></i></a>
                    <a href="#"><i class="fas fa-user-plus"></i></a>
                    <a href="" class="popup" data-target-popup="form-tabs"><i class="fas fa-users"></i></a>
                    <div class="popup-main" data-pop="form-tabs">
                        <div class="popup-bg p-2 d-block">
                            <div class="header-popup d-flex justify-content-between p-2">
                                <h4>Update Teams</h4>
                                <span class="close-pop">✕</span>
                            </div>
                            <div class="popup-body row">
                                <div class="col popup-left">
                                    <h3 class="text-center">Team 1</h3> 
                                    <div class="popup-field d-flex flex-column text-left">
                                        <label for="">Select Team:</label>
                                        <select name="" id="team_1">
                                            <option value="">Custom Team</option>
                                            <?php for($i=0 ; $i <count($teams_list);$i++ ) : ?>
                                            <option value="<?=  $teams_list[$i]->id ?>"><?=  $teams_list[$i]->name ?></option>
                                            <?php endfor ?>
                                            
                                        </select>
                                    </div> 
                                </div>
                                <div class="col popup-right">
                                    <h3 class="text-center">Team 2</h3>
                                    <div class="popup-field d-flex flex-column text-left">
                                        <label for="">Select Team:</label>
                                        <select name="" id="team_2">
                                            <option value="">Custom Team</option>
                                            <?php for($i=0 ; $i <count($teams_list);$i++ ) : ?>
                                            <option value="<?=  $teams_list[$i]->id ?>"><?=  $teams_list[$i]->name ?></option>
                                            <?php endfor ?>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="popup-footer">
                                <button class="" type="submit">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-eye"></i></a>
                    <a href="#"><i class="fas fa-window-maximize"></i></a>
                    <a href="#"><i class="fas fa-arrows-alt"></i></a>
                </div>
                <div class="row1 mt-4">
                    <div class="win-data">
                        <div class="data-content d-flex justify-content-between">
                            <h3>Win Data</h3>
                            <a href="#"><i class="fas fa-minus"></i></a>
                        </div>
                        <div id="clientSlider">
                            <div class="item item-1 slick-current slick-active">
                                <div class="item-bg">
                                    <h3 class="text-center">Consulate</h3>
                                <div class="main-flex d-flex align-items-center">
                                    <div class="first-step">
                                        <h2>ACARA GAMING</h2>
                                        <p>Roundwins:</p>
                                        <input type="number" placeholder="Number of Roundwins">
                                        <p>Operator Bans:</p>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="inner-flex">
                                                <p>Attacker:</p>
                                                <select name="" id="" class="mr-3">
                                                    <option value="">No Ban</option>
                                                    <option value="ace">Ace</option>
                                                    <option value="amaru">Amaru</option>
                                                    <option value="ash">Ash</option>
                                                    <option value="blackbeard">Blackbeard</option>
                                                    <option value="blitz">Blitz</option>
                                                    <option value="buck">Buck</option>
                                                    <option value="capitao">Capitao</option>
                                                    <option value="dokkaebi">Dokkaebi</option>
                                                    <option value="finka">Finka</option>
                                                    <option value="fuze">Fuze</option>
                                                    <option value="glaz">Glaz</option>
                                                    <option value="gridlock">Gridlock</option>
                                                    <option value="hibana">Hibana</option>
                                                    <option value="iana">Iana</option>
                                                    <option value="iq">IQ</option>
                                                    <option value="jackal">Jackal</option>
                                                    <option value="kali">Kali</option>
                                                    <option value="lion">Lion</option>
                                                    <option value="maverick">Maverick</option>
                                                    <option value="montagne">Montagne</option>
                                                    <option value="nokk">Nokk</option>
                                                    <option value="nomad">Nomad</option>
                                                    <option value="sledge">Sledge</option>
                                                    <option value="thatcher">Thatcher</option>
                                                    <option value="thermite">Thermite</option>
                                                    <option value="twitch">Twitch</option>
                                                    <option value="ying">Ying</option>
                                                    <option value="zero">Zero</option>
                                                    <option value="zofia">Zofia</option>
                                                </select>
                                            </div>
                                            <div class="inner-flex">
                                                <p>Defnder:</p>
                                                <select name="" id="" class="">
                                                    <option value="none">No Ban</option>
                                                    <option value="alibi">Alibi</option>
                                                    <option value="aruni">Aruni</option>
                                                    <option value="bandit">Bandit</option>
                                                    <option value="castle">Castle</option>
                                                    <option value="caveira">Caveira</option>
                                                    <option value="clash">Clash</option>
                                                    <option value="doc">Doc</option>
                                                    <option value="echo">Echo</option>
                                                    <option value="ela">Ela</option>
                                                    <option value="frost">Frost</option>
                                                    <option value="goyo">Goyo</option>
                                                    <option value="jager">Jäger</option>
                                                    <option value="kaid">Kaid</option>
                                                    <option value="kapkan">Kapkan</option>
                                                    <option value="lesion">Lesion</option>
                                                    <option value="maestro">Maestro</option>
                                                    <option value="melusi">Melusi</option>
                                                    <option value="mira">Mira</option>
                                                    <option value="mozzie">Mozzie</option>
                                                    <option value="mute">Mute</option>
                                                    <option value="oryx">Oryx</option>
                                                    <option value="pulse">Pulse</option>
                                                    <option value="rook">Rook</option>
                                                    <option value="smoke">Smoke</option>
                                                    <option value="tachanka">Tachanka</option>
                                                    <option value="valkyrie">Valkyrie</option>
                                                    <option value="vigil">Vigil</option>
                                                    <option value="wamai">Wamai</option>
                                                    <option value="warden">Warden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="second-dtep">
                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                    </div>
                                    <div class="third-step">
                                        <h2>ACARA GAMING</h2>
                                        <p>Roundwins:</p>
                                        <input type="number" placeholder="Number of Roundwins">
                                        <p>Operator Bans:</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="inner-flex">
                                                <p>Attacker:</p>
                                                <select name="" id="" class="mr-3">
                                                    <option value="">No Ban</option>
                                                    <option value="ace">Ace</option>
                                                    <option value="amaru">Amaru</option>
                                                    <option value="ash">Ash</option>
                                                    <option value="blackbeard">Blackbeard</option>
                                                    <option value="blitz">Blitz</option>
                                                    <option value="buck">Buck</option>
                                                    <option value="capitao">Capitao</option>
                                                    <option value="dokkaebi">Dokkaebi</option>
                                                    <option value="finka">Finka</option>
                                                    <option value="fuze">Fuze</option>
                                                    <option value="glaz">Glaz</option>
                                                    <option value="gridlock">Gridlock</option>
                                                    <option value="hibana">Hibana</option>
                                                    <option value="iana">Iana</option>
                                                    <option value="iq">IQ</option>
                                                    <option value="jackal">Jackal</option>
                                                    <option value="kali">Kali</option>
                                                    <option value="lion">Lion</option>
                                                    <option value="maverick">Maverick</option>
                                                    <option value="montagne">Montagne</option>
                                                    <option value="nokk">Nokk</option>
                                                    <option value="nomad">Nomad</option>
                                                    <option value="sledge">Sledge</option>
                                                    <option value="thatcher">Thatcher</option>
                                                    <option value="thermite">Thermite</option>
                                                    <option value="twitch">Twitch</option>
                                                    <option value="ying">Ying</option>
                                                    <option value="zero">Zero</option>
                                                    <option value="zofia">Zofia</option>
                                                </select>
                                            </div>
                                            <div class="inner-flex">
                                                <p>Defnder:</p>
                                                <select name="" id=""  jQuery>
                                                    <option value="none">No Ban</option>
                                                    <option value="alibi">Alibi</option>
                                                    <option value="aruni">Aruni</option>
                                                    <option value="bandit">Bandit</option>
                                                    <option value="castle">Castle</option>
                                                    <option value="caveira">Caveira</option>
                                                    <option value="clash">Clash</option>
                                                    <option value="doc">Doc</option>
                                                    <option value="echo">Echo</option>
                                                    <option value="ela">Ela</option>
                                                    <option value="frost">Frost</option>
                                                    <option value="goyo">Goyo</option>
                                                    <option value="jager">Jäger</option>
                                                    <option value="kaid">Kaid</option>
                                                    <option value="kapkan">Kapkan</option>
                                                    <option value="lesion">Lesion</option>
                                                    <option value="maestro">Maestro</option>
                                                    <option value="melusi">Melusi</option>
                                                    <option value="mira">Mira</option>
                                                    <option value="mozzie">Mozzie</option>
                                                    <option value="mute">Mute</option>
                                                    <option value="oryx">Oryx</option>
                                                    <option value="pulse">Pulse</option>
                                                    <option value="rook">Rook</option>
                                                    <option value="smoke">Smoke</option>
                                                    <option value="tachanka">Tachanka</option>
                                                    <option value="valkyrie">Valkyrie</option>
                                                    <option value="vigil">Vigil</option>
                                                    <option value="wamai">Wamai</option>
                                                    <option value="warden">Warden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-around p-4 align-items-center">
                                    <label class="form-switch d-inline">
                                        <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                        <i class="form-icon"></i> Map finished (Counts as Mapwin)
                                    </label>
                                    <label class="form-switch d-inline">
                                        <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                        <i class="form-icon"></i>  Swap Operator Ban Sides (Attacker & Defender)
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="item item-2">
                                <div class="item-bg">
                                    <h3 class="text-center">Consulate</h3>
                                <div class="main-flex d-flex align-items-center">
                                    <div class="first-step">
                                        <h2>ACARA GAMING</h2>
                                        <p>Roundwins:</p>
                                        <input type="number" placeholder="Number of Roundwins">
                                        <p>Operator Bans:</p>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="inner-flex">
                                                <p>Attacker:</p>
                                                <select name="" id="" class="mr-3">
                                                    <option value="">No Ban</option>
                                                    <option value="ace">Ace</option>
                                                    <option value="amaru">Amaru</option>
                                                    <option value="ash">Ash</option>
                                                    <option value="blackbeard">Blackbeard</option>
                                                    <option value="blitz">Blitz</option>
                                                    <option value="buck">Buck</option>
                                                    <option value="capitao">Capitao</option>
                                                    <option value="dokkaebi">Dokkaebi</option>
                                                    <option value="finka">Finka</option>
                                                    <option value="fuze">Fuze</option>
                                                    <option value="glaz">Glaz</option>
                                                    <option value="gridlock">Gridlock</option>
                                                    <option value="hibana">Hibana</option>
                                                    <option value="iana">Iana</option>
                                                    <option value="iq">IQ</option>
                                                    <option value="jackal">Jackal</option>
                                                    <option value="kali">Kali</option>
                                                    <option value="lion">Lion</option>
                                                    <option value="maverick">Maverick</option>
                                                    <option value="montagne">Montagne</option>
                                                    <option value="nokk">Nokk</option>
                                                    <option value="nomad">Nomad</option>
                                                    <option value="sledge">Sledge</option>
                                                    <option value="thatcher">Thatcher</option>
                                                    <option value="thermite">Thermite</option>
                                                    <option value="twitch">Twitch</option>
                                                    <option value="ying">Ying</option>
                                                    <option value="zero">Zero</option>
                                                    <option value="zofia">Zofia</option>
                                                </select>
                                            </div>
                                            <div class="inner-flex">
                                                <p>Defnder:</p>
                                                <select name="" id="" jQuery>
                                                    <option value="none">No Ban</option>
                                                    <option value="alibi">Alibi</option>
                                                    <option value="aruni">Aruni</option>
                                                    <option value="bandit">Bandit</option>
                                                    <option value="castle">Castle</option>
                                                    <option value="caveira">Caveira</option>
                                                    <option value="clash">Clash</option>
                                                    <option value="doc">Doc</option>
                                                    <option value="echo">Echo</option>
                                                    <option value="ela">Ela</option>
                                                    <option value="frost">Frost</option>
                                                    <option value="goyo">Goyo</option>
                                                    <option value="jager">Jäger</option>
                                                    <option value="kaid">Kaid</option>
                                                    <option value="kapkan">Kapkan</option>
                                                    <option value="lesion">Lesion</option>
                                                    <option value="maestro">Maestro</option>
                                                    <option value="melusi">Melusi</option>
                                                    <option value="mira">Mira</option>
                                                    <option value="mozzie">Mozzie</option>
                                                    <option value="mute">Mute</option>
                                                    <option value="oryx">Oryx</option>
                                                    <option value="pulse">Pulse</option>
                                                    <option value="rook">Rook</option>
                                                    <option value="smoke">Smoke</option>
                                                    <option value="tachanka">Tachanka</option>
                                                    <option value="valkyrie">Valkyrie</option>
                                                    <option value="vigil">Vigil</option>
                                                    <option value="wamai">Wamai</option>
                                                    <option value="warden">Warden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="second-dtep">
                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                    </div>
                                    <div class="third-step">
                                        <h2>ACARA GAMING</h2>
                                        <p>Roundwins:</p>
                                        <input type="number" placeholder="Number of Roundwins">
                                        <p>Operator Bans:</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="inner-flex">
                                                <p>Attacker:</p>
                                                <select name="" id="" class="mr-3">
                                                    <option value="">No Ban</option>
                                                    <option value="ace">Ace</option>
                                                    <option value="amaru">Amaru</option>
                                                    <option value="ash">Ash</option>
                                                    <option value="blackbeard">Blackbeard</option>
                                                    <option value="blitz">Blitz</option>
                                                    <option value="buck">Buck</option>
                                                    <option value="capitao">Capitao</option>
                                                    <option value="dokkaebi">Dokkaebi</option>
                                                    <option value="finka">Finka</option>
                                                    <option value="fuze">Fuze</option>
                                                    <option value="glaz">Glaz</option>
                                                    <option value="gridlock">Gridlock</option>
                                                    <option value="hibana">Hibana</option>
                                                    <option value="iana">Iana</option>
                                                    <option value="iq">IQ</option>
                                                    <option value="jackal">Jackal</option>
                                                    <option value="kali">Kali</option>
                                                    <option value="lion">Lion</option>
                                                    <option value="maverick">Maverick</option>
                                                    <option value="montagne">Montagne</option>
                                                    <option value="nokk">Nokk</option>
                                                    <option value="nomad">Nomad</option>
                                                    <option value="sledge">Sledge</option>
                                                    <option value="thatcher">Thatcher</option>
                                                    <option value="thermite">Thermite</option>
                                                    <option value="twitch">Twitch</option>
                                                    <option value="ying">Ying</option>
                                                    <option value="zero">Zero</option>
                                                    <option value="zofia">Zofia</option>
                                                </select>
                                            </div>
                                            <div class="inner-flex">
                                                <p>Defnder:</p>
                                                <select name="" id=""  jQuery>
                                                    <option value="none">No Ban</option>
                                                    <option value="alibi">Alibi</option>
                                                    <option value="aruni">Aruni</option>
                                                    <option value="bandit">Bandit</option>
                                                    <option value="castle">Castle</option>
                                                    <option value="caveira">Caveira</option>
                                                    <option value="clash">Clash</option>
                                                    <option value="doc">Doc</option>
                                                    <option value="echo">Echo</option>
                                                    <option value="ela">Ela</option>
                                                    <option value="frost">Frost</option>
                                                    <option value="goyo">Goyo</option>
                                                    <option value="jager">Jäger</option>
                                                    <option value="kaid">Kaid</option>
                                                    <option value="kapkan">Kapkan</option>
                                                    <option value="lesion">Lesion</option>
                                                    <option value="maestro">Maestro</option>
                                                    <option value="melusi">Melusi</option>
                                                    <option value="mira">Mira</option>
                                                    <option value="mozzie">Mozzie</option>
                                                    <option value="mute">Mute</option>
                                                    <option value="oryx">Oryx</option>
                                                    <option value="pulse">Pulse</option>
                                                    <option value="rook">Rook</option>
                                                    <option value="smoke">Smoke</option>
                                                    <option value="tachanka">Tachanka</option>
                                                    <option value="valkyrie">Valkyrie</option>
                                                    <option value="vigil">Vigil</option>
                                                    <option value="wamai">Wamai</option>
                                                    <option value="warden">Warden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-around p-4 align-items-center">
                                    <label class="form-switch d-inline">
                                        <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                        <i class="form-icon"></i> Map finished (Counts as Mapwin)
                                    </label>
                                    <label class="form-switch d-inline">
                                        <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                        <i class="form-icon"></i>  Swap Operator Ban Sides (Attacker & Defender)
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="item item-3">
                                <div class="item-bg">
                                    <h3 class="text-center">Consulate</h3>
                                <div class="main-flex d-flex align-items-center">
                                    <div class="first-step">
                                        <h2>ACARA GAMING</h2>
                                        <p>Roundwins:</p>
                                        <input type="number" placeholder="Number of Roundwins">
                                        <p>Operator Bans:</p>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="inner-flex">
                                                <p>Attacker:</p>
                                                <select name="" id="" class="mr-3">
                                                    <option value="">No Ban</option>
                                                    <option value="ace">Ace</option>
                                                    <option value="amaru">Amaru</option>
                                                    <option value="ash">Ash</option>
                                                    <option value="blackbeard">Blackbeard</option>
                                                    <option value="blitz">Blitz</option>
                                                    <option value="buck">Buck</option>
                                                    <option value="capitao">Capitao</option>
                                                    <option value="dokkaebi">Dokkaebi</option>
                                                    <option value="finka">Finka</option>
                                                    <option value="fuze">Fuze</option>
                                                    <option value="glaz">Glaz</option>
                                                    <option value="gridlock">Gridlock</option>
                                                    <option value="hibana">Hibana</option>
                                                    <option value="iana">Iana</option>
                                                    <option value="iq">IQ</option>
                                                    <option value="jackal">Jackal</option>
                                                    <option value="kali">Kali</option>
                                                    <option value="lion">Lion</option>
                                                    <option value="maverick">Maverick</option>
                                                    <option value="montagne">Montagne</option>
                                                    <option value="nokk">Nokk</option>
                                                    <option value="nomad">Nomad</option>
                                                    <option value="sledge">Sledge</option>
                                                    <option value="thatcher">Thatcher</option>
                                                    <option value="thermite">Thermite</option>
                                                    <option value="twitch">Twitch</option>
                                                    <option value="ying">Ying</option>
                                                    <option value="zero">Zero</option>
                                                    <option value="zofia">Zofia</option>
                                                </select>
                                            </div>
                                            <div class="inner-flex">
                                                <p>Defnder:</p>
                                                <select name="" id="" jQuery>
                                                    <option value="none">No Ban</option>
                                                    <option value="alibi">Alibi</option>
                                                    <option value="aruni">Aruni</option>
                                                    <option value="bandit">Bandit</option>
                                                    <option value="castle">Castle</option>
                                                    <option value="caveira">Caveira</option>
                                                    <option value="clash">Clash</option>
                                                    <option value="doc">Doc</option>
                                                    <option value="echo">Echo</option>
                                                    <option value="ela">Ela</option>
                                                    <option value="frost">Frost</option>
                                                    <option value="goyo">Goyo</option>
                                                    <option value="jager">Jäger</option>
                                                    <option value="kaid">Kaid</option>
                                                    <option value="kapkan">Kapkan</option>
                                                    <option value="lesion">Lesion</option>
                                                    <option value="maestro">Maestro</option>
                                                    <option value="melusi">Melusi</option>
                                                    <option value="mira">Mira</option>
                                                    <option value="mozzie">Mozzie</option>
                                                    <option value="mute">Mute</option>
                                                    <option value="oryx">Oryx</option>
                                                    <option value="pulse">Pulse</option>
                                                    <option value="rook">Rook</option>
                                                    <option value="smoke">Smoke</option>
                                                    <option value="tachanka">Tachanka</option>
                                                    <option value="valkyrie">Valkyrie</option>
                                                    <option value="vigil">Vigil</option>
                                                    <option value="wamai">Wamai</option>
                                                    <option value="warden">Warden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="second-dtep">
                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                    </div>
                                    <div class="third-step">
                                        <h2>ACARA GAMING</h2>
                                        <p>Roundwins:</p>
                                        <input type="number" placeholder="Number of Roundwins">
                                        <p>Operator Bans:</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="inner-flex">
                                                <p>Attacker:</p>
                                                <select name="" id="" class="mr-3">
                                                    <option value="">No Ban</option>
                                                    <option value="ace">Ace</option>
                                                    <option value="amaru">Amaru</option>
                                                    <option value="ash">Ash</option>
                                                    <option value="blackbeard">Blackbeard</option>
                                                    <option value="blitz">Blitz</option>
                                                    <option value="buck">Buck</option>
                                                    <option value="capitao">Capitao</option>
                                                    <option value="dokkaebi">Dokkaebi</option>
                                                    <option value="finka">Finka</option>
                                                    <option value="fuze">Fuze</option>
                                                    <option value="glaz">Glaz</option>
                                                    <option value="gridlock">Gridlock</option>
                                                    <option value="hibana">Hibana</option>
                                                    <option value="iana">Iana</option>
                                                    <option value="iq">IQ</option>
                                                    <option value="jackal">Jackal</option>
                                                    <option value="kali">Kali</option>
                                                    <option value="lion">Lion</option>
                                                    <option value="maverick">Maverick</option>
                                                    <option value="montagne">Montagne</option>
                                                    <option value="nokk">Nokk</option>
                                                    <option value="nomad">Nomad</option>
                                                    <option value="sledge">Sledge</option>
                                                    <option value="thatcher">Thatcher</option>
                                                    <option value="thermite">Thermite</option>
                                                    <option value="twitch">Twitch</option>
                                                    <option value="ying">Ying</option>
                                                    <option value="zero">Zero</option>
                                                    <option value="zofia">Zofia</option>
                                                </select>
                                            </div>
                                            <div class="inner-flex">
                                                <p>Defnder:</p>
                                                <select name="" id=""  jQuery>
                                                    <option value="none">No Ban</option>
                                                    <option value="alibi">Alibi</option>
                                                    <option value="aruni">Aruni</option>
                                                    <option value="bandit">Bandit</option>
                                                    <option value="castle">Castle</option>
                                                    <option value="caveira">Caveira</option>
                                                    <option value="clash">Clash</option>
                                                    <option value="doc">Doc</option>
                                                    <option value="echo">Echo</option>
                                                    <option value="ela">Ela</option>
                                                    <option value="frost">Frost</option>
                                                    <option value="goyo">Goyo</option>
                                                    <option value="jager">Jäger</option>
                                                    <option value="kaid">Kaid</option>
                                                    <option value="kapkan">Kapkan</option>
                                                    <option value="lesion">Lesion</option>
                                                    <option value="maestro">Maestro</option>
                                                    <option value="melusi">Melusi</option>
                                                    <option value="mira">Mira</option>
                                                    <option value="mozzie">Mozzie</option>
                                                    <option value="mute">Mute</option>
                                                    <option value="oryx">Oryx</option>
                                                    <option value="pulse">Pulse</option>
                                                    <option value="rook">Rook</option>
                                                    <option value="smoke">Smoke</option>
                                                    <option value="tachanka">Tachanka</option>
                                                    <option value="valkyrie">Valkyrie</option>
                                                    <option value="vigil">Vigil</option>
                                                    <option value="wamai">Wamai</option>
                                                    <option value="warden">Warden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-around p-4 align-items-center">
                                    <label class="form-switch d-inline">
                                        <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                        <i class="form-icon"></i> Map finished (Counts as Mapwin)
                                    </label>
                                    <label class="form-switch d-inline">
                                        <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                        <i class="form-icon"></i>  Swap Operator Ban Sides (Attacker & Defender)
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row1 mt-4 flex-row d-flex">
                        <div class="win-data">
                            <div class="data-content d-flex justify-content-between">
                                <h3>Mapbans</h3>
                                <div class="mapban-icons">
                                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                                    <a href="#"><i class="fas fa-cogs"></i></a>
                                    <a href="#"><i class="fas fa-map"></i></a>
                                    <a href="#"><i class="fas fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="text-mapban">
                                <h2>You have to <i class="fas fa-times"></i> <b><u>ban</u></b> <i class="fas fa-times"></i> the next Map for Team 1 (LEFT)!</h2>
                            </div>
                            <div class="text-mapban2">
                                <div class="banditry-img">
                                    <h2>TACTICAL BANDITRY</h2>
                                </div>
                                <div class="banditry-img2">
                                    <h2>TROLL TEAM 6</h2>
                                </div>
                            </div>
                            <div class="text-mapban-bg">
                                <img src="images/club_house.jpg" alt="">
                               <div class="club-content">
                                    <span>Club House</span>
                               </div>
                            </div>
                            <div class="text-mapban-bg text-mapban-bg2">
                                <img src="images/coastline.jpg" alt="">
                                <div class="club-content">
                                     <span>Coastline</span>
                                </div>
                            </div>
                            <div class="text-mapban-bg text-mapban-bg3">
                                <img src="images/consulate.jpg" alt="">
                                <div class="club-content">
                                     <span>Consulate</span>
                                </div>
                            </div>
                            <div class="text-mapban-bg text-mapban-bg4">
                                <img src="images/dostoyevsky.jpg" alt="">
                                <div class="club-content">
                                     <span>Kafe Dostoyevsky</span>
                                </div>
                            </div>
                            <div class="text-mapban-bg text-mapban-bg5">
                                <img src="images/oregon.jpg" alt="">
                                <div class="club-content">
                                     <span>Oregon</span>
                                </div>
                            </div>
                            <div class="text-mapban-bg text-mapban-bg6">
                                <img src="images/theme.jpg" alt="">
                                <div class="club-content">
                                     <span>Theme Park</span>
                                </div>
                            </div>
                            <div class="text-mapban-bg text-mapban-bg7">
                                <img src="images/villa.jpg" alt="">
                                <div class="club-content">
                                     <span>Villa</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-row-right">
                            <div class="right-box d-flex justify-content-between">
                                <h3>Roster View - roster</h3>
                                <div class="icons">
                                    <a href="#"><i class="fas fa-users-cog"></i></a>
                                    <a href="#"><i class="fas fa-minus"></i></a>
                                </div>
                            </div>
                            <label>Show Team:
                                <select name="showTeam" class="mb-1">
                                    <option value="1">ACARA GAMING</option>
                                    <option value="2" selected="">TEAM FRONT</option>
                                </select>
                            </label>
                            <button class="" type="submit">
                                Update
                            </button>
                        </div>
                    </div>
                    <div class="win-data2">
                        
                        <div class="flex-row-right">
                            <div class="right-box d-flex justify-content-between">
                                <h3>Ticker View - scene_ticker</h3>
                                <div class="icons">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-align-justify"></i></a>
                                    <a href="#"><i class="fas fa-minus"></i></a>
                                </div>
                            </div>
                            <label>Title:
                                <input type="text" placeholder="MATCH TEXT" value="MATCH TEXT">
                            </label>
                            <label>Time Function:
                                <select name="showTeam" class="mb-1">
                                    <option value="1">none</option>
                                    <option value="2" selected="">Clock</option>
                                    <option value="2" selected="">Countdown</option>
                                </select>
                            </label>
                            <div class="columns">
                                <div class="column col-12">Countdown to:</div>
                                <div class="column col-9"><input type="date" id="countdownDate" name="countdownDate" value="2020-10-04"></div>
                                <div class="column col-3 text-center"><input type="time" id="countdownTime" name="countdownTime" value="17:50" class="text-center"></div>
                            </div>
                            <button class="" type="submit">
                                Update
                            </button>
                        </div>
                        
                        <div class="flex-row-right">
                            <div class="right-box d-flex justify-content-between">
                                <h3>Match Data</h3>
                                <div class="icons">
                                    <a href="#"><i class="fas fa-minus"></i></a>
                                </div>
                            </div>
                            <label>Eventname (Shown in overlays):
                                <input type="text" placeholder="MATCH 1" value="MATCH 1">
                            </label>
                            <label>Subtitle (Shown in overlays):
                                <input type="text" placeholder="Enter Subtitle">
                            </label>
                            <button class="" type="submit">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="horizontal-tabs">
                    <div id="tabs-nav">
                        <div class="addmatch-tab active">
                            <a href="#tab1" class="">Add Match</a>
                        </div>
                        <div class="listmatch-tab">
                            <a href="#tab2" class="">List Matches</a>
                        </div>
                        
                    </div> <!-- END tabs-nav -->
                    <div id="tabs-content">
                        <div id="tab1" class="tab-content match-form">
                            <h1 class="main-head map-ban-bg">Add Match</h1>
                            <h2>Please fill out the form to create a match</h2>
                            <p class="mapban-para">Mapban setting can be changed later!</p>
                            <label class="overlay">Eventname (Shown in overlays):
                                <input class="mb-1" type="text" placeholder="Enter Eventname">
                            </label>
                            <button class="update-btn" type="submit">
                                Update
                            </button>
                            <!-- <div class="grid">
                                <div class="row">
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/csgo.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Counter Strike Global Offensive</h3>
                                        <p>Create an exclusive map veto lobby for<br>Counter Strike Global Offensive</p>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/r6s.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Rainbow Six Siege</h3>
                                        <p>Create an exclusive map veto lobby for<br>Rainbow Six Siege</p>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/lol.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>League of Legends</h3>
                                        <p>Create an exclusive map veto lobby for<br>League of Legends</p>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/valorant.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>VALORANT</h3>
                                        <p>Create an exclusive map veto lobby for<br>VALORANT</p>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/rl.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Rocket League</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/fifa.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>FIFA</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/ow.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Overwatch</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/sc2.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>StarCraft 2</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/cod-mw.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Call of Duty: Modern Warfare</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/halo5.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Halo 5: Guardians</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/halo-reach.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Halo: Reach</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/halo3.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Halo 3</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/halo-ce.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Halo: Combat Evolved</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/bf1.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Battlefield 1</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/paladins.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Paladins</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/wface.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Warface</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>MechWarrior Online</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>WarCraft 3</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Team Fortress 2</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/paladins.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Paladins</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <div class="inner-img">
                                            <img src="images/wface.png" alt="" class="map-ban-bg rounded-circle">
                                        </div>
                                        <h3>Warface</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>MechWarrior Online</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>WarCraft 3</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Team Fortress 2</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Critical Ops</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">  
                                        <h3>Battalion 1944</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Splitgate Arena Warfare</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>America's Army Proving Grounds</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Mordhau</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Call of Duty: Black Ops 4</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">  
                                        <h3>Call of Duty: Black Ops Cold War</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Super Smash Bros.: Ultimate</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Call of Duty: Mobile</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Gears of War 5</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Age of Empires</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">  
                                        <h3>Standoff 2</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Dead by Daylight</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Left 4 Dead 2</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Medal of Honor: Allied Assault</h3>
                                    </a>
                                </div>
                                <div class="row normal-row">
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>S4 League</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">  
                                        <h3>Attack on Titan: Tribute Game</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Quake Champions</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Rogue Company</h3>
                                    </a>
                                    <a href="#" class="img-box col mapban-border">
                                        <h3>Forts</h3>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="match1-subsec">
                                <div class="match1-bg">
                                    <div class="match-img px-4">
                                        <img src="images/5f30678590ab97.446562299141.png" alt="">
                                        <h2>MATCH 1</h2>
                                    </div>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#"><i class="fas fa-gamepad"></i> Rainbow Six Siege</a></li>
                                        <li><a href="#"><i class="fas fa-calendar-plus"></i>  2020-08-09 21:09:56</a></li>
                                        <li><a href="#" data-tooltip="Club_House

                                            Coastline
                                            
                                            Consulate
                                            
                                            Dostoyevsky
                                            
                                            Oregon
                                            
                                            Theme
                                            
                                            Villa"><i class="fas fa-map"></i> Competitive</a></li>
                                        <li><a href="#"><i class="fas fa-sitemap"></i>  Best of 3</a></li>
                                        <li><a href="#"><i class="fas fa-dice-d20"></i>  Bomb</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="icon-row text-right d-block px-4 py-1 mt-4">
                                <a href="#"><i class="fas fa-trash"></i></a>
                                <a href="#"><i class="fas fa-clone"></i></a>
                                <a href="#"><i class="fas fa-undo"></i></a>
                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#"><i class="fas fa-gamepad"></i></a>
                                <a href="#"><i class="fas fa-user-plus"></i></a>
                                <a href="#"><i class="fas fa-users"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-window-maximize"></i></a>
                                <a href="#"><i class="fas fa-arrows-alt"></i></a>
                            </div>
                            <div class="row1 mt-4">
                                <div class="win-data">
                                    <div class="data-content d-flex justify-content-between">
                                        <h3>Win Data</h3>
                                        <a href="#"><i class="fas fa-minus"></i></a>
                                    </div>
                                    <div id="clientSlider">
                                        <div class="item item-1 slick-current slick-active">
                                            <div class="item-bg">
                                                <h3 class="text-center">Consulate</h3>
                                            <div class="main-flex d-flex align-items-center">
                                                <div class="first-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" class="">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="second-dtep">
                                                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <div class="third-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id=""  jQuery>
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around p-4">
                                                <label class="form-switch d-inline">
                                                    <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                                    <i class="form-icon"></i> Strawpoll.me
                                                </label>
                                                <label class="form-switch d-inline">
                                                    <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                                    <i class="form-icon"></i> Strawpoll.me
                                                </label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item item-2">
                                            <div class="item-bg">
                                                <h3 class="text-center">Consulate</h3>
                                            <div class="main-flex d-flex align-items-center">
                                                <div class="first-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jQuery>
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="second-dtep">
                                                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <div class="third-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id=""  jQuery>
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="form-switch d-inline">
                                                <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                                <i class="form-icon"></i> Strawpoll.me
                                            </label>
                                            </div>
                                        </div>
                                        <div class="item item-3">
                                            <div class="item-bg">
                                                <h3 class="text-center">Consulate</h3>
                                            <div class="main-flex d-flex align-items-center">
                                                <div class="first-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jQuery>
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="second-dtep">
                                                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <div class="third-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id=""  jQuery>
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="form-switch d-inline">
                                                <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="">
                                                <i class="form-icon"></i> Strawpoll.me
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row1 mt-4 flex-row d-flex">
                                    <div class="win-data">
                                        <div class="data-content d-flex justify-content-between">
                                            <h3>Mapbans</h3>
                                            <div class="mapban-icons">
                                                <a href="#"><i class="fas fa-external-link-alt"></i></a>
                                                <a href="#"><i class="fas fa-cogs"></i></a>
                                                <a href="#"><i class="fas fa-map"></i></a>
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-mapban">
                                            <h2>You have to <i class="fas fa-times"></i> <b><u>ban</u></b> <i class="fas fa-times"></i> the next Map for Team 1 (LEFT)!</h2>
                                        </div>
                                        <div class="text-mapban2">
                                            <div class="banditry-img">
                                                <h2>TACTICAL BANDITRY</h2>
                                            </div>
                                            <div class="banditry-img2">
                                                <h2>TROLL TEAM 6</h2>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg">
                                            <img src="images/club_house.jpg" alt="">
                                           <div class="club-content">
                                                <span>Club House</span>
                                           </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg2">
                                            <img src="images/coastline.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Coastline</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg3">
                                            <img src="images/consulate.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Consulate</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg4">
                                            <img src="images/dostoyevsky.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Kafe Dostoyevsky</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg5">
                                            <img src="images/oregon.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Oregon</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg6">
                                            <img src="images/theme.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Theme Park</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg7">
                                            <img src="images/villa.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Villa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-row-right">
                                        <div class="right-box d-flex justify-content-between">
                                            <h3>Roster View - roster</h3>
                                            <div class="icons">
                                                <a href="#"><i class="fas fa-users-cog"></i></a>
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <label>Show Team:
                                            <select name="showTeam" class="mb-1">
                                                <option value="1">ACARA GAMING</option>
                                                <option value="2" selected="">TEAM FRONT</option>
                                            </select>
                                        </label>
                                        <button class="" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                                <div class="win-data2">
                                    
                                    <div class="flex-row-right">
                                        <div class="right-box d-flex justify-content-between">
                                            <h3>Ticker View - scene_ticker</h3>
                                            <div class="icons">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fas fa-align-justify"></i></a>
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <label>Title:
                                            <input type="text" placeholder="MATCH TEXT" value="MATCH TEXT">
                                        </label>
                                        <label>Time Function:
                                            <select name="showTeam" class="mb-1">
                                                <option value="1">none</option>
                                                <option value="2" selected="">Clock</option>
                                                <option value="2" selected="">Countdown</option>
                                            </select>
                                        </label>
                                        <div class="columns">
                                            <div class="column col-12">Countdown to:</div>
                                            <div class="column col-9"><input type="date" id="countdownDate" name="countdownDate" value="2020-10-04"></div>
                                            <div class="column col-3 text-center"><input type="time" id="countdownTime" name="countdownTime" value="17:50" class="text-center"></div>
                                        </div>
                                        <button class="" type="submit">
                                            Update
                                        </button>
                                    </div>
                                    
                                    <div class="flex-row-right">
                                        <div class="right-box d-flex justify-content-between">
                                            <h3>Match Data</h3>
                                            <div class="icons">
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <label>Eventname (Shown in overlays):
                                            <input type="text" placeholder="MATCH 1" value="MATCH 1">
                                        </label>
                                        <label>Subtitle (Shown in overlays):
                                            <input type="text" placeholder="Enter Subtitle">
                                        </label>
                                        <button class="" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div id="tab2" class="tab-content">
                            <div class="list-row row my-5">
                                <div class="col" onclick="location.href='match1.html';">
                                    <div class="col-content">
                                        <h3>Match 1</h3>
                                    </div>
                                </div>
                                <div class="col" onclick="location.href='match2.html';">
                                    <div class="col-content">
                                        <h3>Match 2</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="match1-subsec">
                                <div class="match1-bg">
                                    <div class="match-img px-4">
                                        <img src="images/5f30678590ab97.446562299141.png" alt="">
                                        <h2>MATCH 1</h2>
                                    </div>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#"><i class="fas fa-gamepad"></i> Rainbow Six Siege</a></li>
                                        <li><a href="#"><i class="fas fa-calendar-plus"></i>  2020-08-09 21:09:56</a></li>
                                        <li><a href="#" data-tooltip="Club_House

                                            Coastline
                                            
                                            Consulate
                                            
                                            Dostoyevsky
                                            
                                            Oregon
                                            
                                            Theme
                                            
                                            Villa"><i class="fas fa-map"></i> Competitive</a></li>
                                        <li><a href="#"><i class="fas fa-sitemap"></i>  Best of 3</a></li>
                                        <li><a href="#"><i class="fas fa-dice-d20"></i>  Bomb</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="icon-row text-right d-block px-4 py-1 mt-4">
                                <a href="#"><i class="fas fa-trash"></i></a>
                                <a href="#"><i class="fas fa-clone"></i></a>
                                <a href="#"><i class="fas fa-undo"></i></a>
                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#"><i class="fas fa-gamepad"></i></a>
                                <a href="#"><i class="fas fa-user-plus"></i></a>
                                <a href="#"><i class="fas fa-users"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-window-maximize"></i></a>
                                <a href="#"><i class="fas fa-arrows-alt"></i></a>
                            </div>
                            <div class="row1 mt-4">
                                <div class="win-data">
                                    <div class="data-content d-flex justify-content-between">
                                        <h3>Win Data</h3>
                                        <a href="#"><i class="fas fa-minus"></i></a>
                                    </div>
                                    <div id="clientSlider" class="slick-initialized slick-slider"><button type="button" class="slick-prev slick-arrow" aria-disabled="false" style=""></button>
                                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2094px; transform: translate3d(-1396px, 0px, 0px);"><div class="item item-1 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 698px;">
                                            <div class="item-bg">
                                                <h3 class="text-center">Consulate</h3>
                                            <div class="main-flex d-flex align-items-center">
                                                <div class="first-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins" tabindex="-1">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3" tabindex="-1">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" class="" tabindex="-1">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="second-dtep">
                                                    <a href="#" tabindex="-1"><i class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <div class="third-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins" tabindex="-1">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3" tabindex="-1">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jquery="" tabindex="-1">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around p-4">
                                                <label class="form-switch d-inline">
                                                    <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="" tabindex="-1">
                                                    <i class="form-icon"></i> Strawpoll.me
                                                </label>
                                                <label class="form-switch d-inline">
                                                    <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="" tabindex="-1">
                                                    <i class="form-icon"></i> Strawpoll.me
                                                </label>
                                            </div>
                                            </div>
                                        </div><div class="item item-2 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 698px;">
                                            <div class="item-bg">
                                                <h3 class="text-center">Consulate</h3>
                                            <div class="main-flex d-flex align-items-center">
                                                <div class="first-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins" tabindex="-1">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3" tabindex="-1">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jquery="" tabindex="-1">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="second-dtep">
                                                    <a href="#" tabindex="-1"><i class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <div class="third-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins" tabindex="-1">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3" tabindex="-1">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jquery="" tabindex="-1">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="form-switch d-inline">
                                                <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="" tabindex="-1">
                                                <i class="form-icon"></i> Strawpoll.me
                                            </label>
                                            </div>
                                        </div><div class="item item-3 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 698px;">
                                            <div class="item-bg">
                                                <h3 class="text-center">Consulate</h3>
                                            <div class="main-flex d-flex align-items-center">
                                                <div class="first-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins" tabindex="0">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3" tabindex="0">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jquery="" tabindex="0">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="second-dtep">
                                                    <a href="#" tabindex="0"><i class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <div class="third-step">
                                                    <h2>ACARA GAMING</h2>
                                                    <p>Roundwins:</p>
                                                    <input type="number" placeholder="Number of Roundwins" tabindex="0">
                                                    <p>Operator Bans:</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="inner-flex">
                                                            <p>Attacker:</p>
                                                            <select name="" id="" class="mr-3" tabindex="0">
                                                                <option value="">No Ban</option>
                                                                <option value="ace">Ace</option>
                                                                <option value="amaru">Amaru</option>
                                                                <option value="ash">Ash</option>
                                                                <option value="blackbeard">Blackbeard</option>
                                                                <option value="blitz">Blitz</option>
                                                                <option value="buck">Buck</option>
                                                                <option value="capitao">Capitao</option>
                                                                <option value="dokkaebi">Dokkaebi</option>
                                                                <option value="finka">Finka</option>
                                                                <option value="fuze">Fuze</option>
                                                                <option value="glaz">Glaz</option>
                                                                <option value="gridlock">Gridlock</option>
                                                                <option value="hibana">Hibana</option>
                                                                <option value="iana">Iana</option>
                                                                <option value="iq">IQ</option>
                                                                <option value="jackal">Jackal</option>
                                                                <option value="kali">Kali</option>
                                                                <option value="lion">Lion</option>
                                                                <option value="maverick">Maverick</option>
                                                                <option value="montagne">Montagne</option>
                                                                <option value="nokk">Nokk</option>
                                                                <option value="nomad">Nomad</option>
                                                                <option value="sledge">Sledge</option>
                                                                <option value="thatcher">Thatcher</option>
                                                                <option value="thermite">Thermite</option>
                                                                <option value="twitch">Twitch</option>
                                                                <option value="ying">Ying</option>
                                                                <option value="zero">Zero</option>
                                                                <option value="zofia">Zofia</option>
                                                            </select>
                                                        </div>
                                                        <div class="inner-flex">
                                                            <p>Defnder:</p>
                                                            <select name="" id="" jquery="" tabindex="0">
                                                                <option value="none">No Ban</option>
                                                                <option value="alibi">Alibi</option>
                                                                <option value="aruni">Aruni</option>
                                                                <option value="bandit">Bandit</option>
                                                                <option value="castle">Castle</option>
                                                                <option value="caveira">Caveira</option>
                                                                <option value="clash">Clash</option>
                                                                <option value="doc">Doc</option>
                                                                <option value="echo">Echo</option>
                                                                <option value="ela">Ela</option>
                                                                <option value="frost">Frost</option>
                                                                <option value="goyo">Goyo</option>
                                                                <option value="jager">Jäger</option>
                                                                <option value="kaid">Kaid</option>
                                                                <option value="kapkan">Kapkan</option>
                                                                <option value="lesion">Lesion</option>
                                                                <option value="maestro">Maestro</option>
                                                                <option value="melusi">Melusi</option>
                                                                <option value="mira">Mira</option>
                                                                <option value="mozzie">Mozzie</option>
                                                                <option value="mute">Mute</option>
                                                                <option value="oryx">Oryx</option>
                                                                <option value="pulse">Pulse</option>
                                                                <option value="rook">Rook</option>
                                                                <option value="smoke">Smoke</option>
                                                                <option value="tachanka">Tachanka</option>
                                                                <option value="valkyrie">Valkyrie</option>
                                                                <option value="vigil">Vigil</option>
                                                                <option value="wamai">Wamai</option>
                                                                <option value="warden">Warden</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="form-switch d-inline">
                                                <input type="checkbox" name="strawPollMe" id="strawPollMe" checked="" tabindex="0">
                                                <i class="form-icon"></i> Strawpoll.me
                                            </label>
                                            </div>
                                        </div></div></div>
                                        
                                        
                                    <button type="button" class="slick-next slick-arrow slick-disabled" style="" aria-disabled="true"></button></div>
                                </div>
                                <div class="row1 mt-4 flex-row d-flex">
                                    <div class="win-data">
                                        <div class="data-content d-flex justify-content-between">
                                            <h3>Mapbans</h3>
                                            <div class="mapban-icons">
                                                <a href="#"><i class="fas fa-external-link-alt"></i></a>
                                                <a href="#"><i class="fas fa-cogs"></i></a>
                                                <a href="#"><i class="fas fa-map"></i></a>
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-mapban">
                                            <h2>You have to <i class="fas fa-times"></i> <b><u>ban</u></b> <i class="fas fa-times"></i> the next Map for Team 1 (LEFT)!</h2>
                                        </div>
                                        <div class="text-mapban2">
                                            <div class="banditry-img">
                                                <h2>TACTICAL BANDITRY</h2>
                                            </div>
                                            <div class="banditry-img2">
                                                <h2>TROLL TEAM 6</h2>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg">
                                            <img src="images/club_house.jpg" alt="">
                                           <div class="club-content">
                                                <span>Club House</span>
                                           </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg2">
                                            <img src="images/coastline.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Coastline</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg3">
                                            <img src="images/consulate.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Consulate</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg4">
                                            <img src="images/dostoyevsky.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Kafe Dostoyevsky</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg5">
                                            <img src="images/oregon.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Oregon</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg6">
                                            <img src="images/theme.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Theme Park</span>
                                            </div>
                                        </div>
                                        <div class="text-mapban-bg text-mapban-bg7">
                                            <img src="images/villa.jpg" alt="">
                                            <div class="club-content">
                                                 <span>Villa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-row-right">
                                        <div class="right-box d-flex justify-content-between">
                                            <h3>Roster View - roster</h3>
                                            <div class="icons">
                                                <a href="#"><i class="fas fa-users-cog"></i></a>
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <label>Show Team:
                                            <select name="showTeam" class="mb-1">
                                                <option value="1">ACARA GAMING</option>
                                                <option value="2" selected="">TEAM FRONT</option>
                                            </select>
                                        </label>
                                        <button class="" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                                <div class="win-data2">
                                    
                                    <div class="flex-row-right">
                                        <div class="right-box d-flex justify-content-between">
                                            <h3>Ticker View - scene_ticker</h3>
                                            <div class="icons">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fas fa-align-justify"></i></a>
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <label>Title:
                                            <input type="text" placeholder="MATCH TEXT" value="MATCH TEXT">
                                        </label>
                                        <label>Time Function:
                                            <select name="showTeam" class="mb-1">
                                                <option value="1">none</option>
                                                <option value="2" selected="">Clock</option>
                                                <option value="2" selected="">Countdown</option>
                                            </select>
                                        </label>
                                        <div class="columns">
                                            <div class="column col-12">Countdown to:</div>
                                            <div class="column col-9"><input type="date" id="countdownDate" name="countdownDate" value="2020-10-04"></div>
                                            <div class="column col-3 text-center"><input type="time" id="countdownTime" name="countdownTime" value="17:50" class="text-center"></div>
                                        </div>
                                        <button class="" type="submit">
                                            Update
                                        </button>
                                    </div>
                                    
                                    <div class="flex-row-right">
                                        <div class="right-box d-flex justify-content-between">
                                            <h3>Match Data</h3>
                                            <div class="icons">
                                                <a href="#"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                        <label>Eventname (Shown in overlays):
                                            <input type="text" placeholder="MATCH 1" value="MATCH 1">
                                        </label>
                                        <label>Subtitle (Shown in overlays):
                                            <input type="text" placeholder="Enter Subtitle">
                                        </label>
                                        <button class="" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div> <!-- END tabs-content -->
                </div>
            </div>
            <div class="content">
                <!-- <div class="horizontal-tabs">
                    <div id="tabs-nav2">
                        <div class="addmatch-tab active">
                            <a href="#tab1-2" class="">Add Team</a>
                        </div>
                        <div class="listmatch-tab">
                            <a href="#tab2-2" class="">List Teams</a>
                        </div>
                        <div class="player-stat-tab">
                            <a href="#tab3-2" class="">Player Stats Settings</a>
                        </div>
                        
                    </div>
                    <div id="tabs-content2">
                        <div id="tab1-2" class="tab-content2">
                            <h1 class="main-head map-ban-bg">List Matches</h1>
                            <h2><i class="fas fa-arrow-down"></i> Pick your Game <i class="fas fa-arrow-down"></i></h2>
                        </div>
                        <div id="tab2-2" class="tab-content2">
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f330633b64ea4.184513146175.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>ACARA GAMING</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f319f1c881041.927173512695.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>CLAW CENTRAL</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f33069bb14cc3.609355728159.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>POWERHAUS</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f31a24f4711d1.039485699255.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>PRISM ESPORTS</h3>
                                </a>
                            </div>
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f3453b8244cc9.946703553387.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TACTICAL BANDITRY</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5fbd4f263aa9e0.230201364273.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>Team 1</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f3707c2493722.990901622284.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TEAM FRONT</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f32f9ab0e4c73.229761431056.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TEAM REMEDY</h3>
                                </a>
                            </div>
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f3993a64f9991.310436889262.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TROLL TEAM 6</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f344e16ad66c0.566210854068.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>UNREAL ACADEMY</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f344e16ad66c0.566210854068.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>UNREAL NIGHTMARE</h3>
                                </a>
                            </div>
                        </div>
                        <div id="tab3-2" class="tab-content2">
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/csgo.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>Counter Strike Global Offensive</h3>
                                    <p>Create an exclusive map veto lobby for<br>Counter Strike Global Offensive</p>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/r6s.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>Rainbow Six Siege</h3>
                                    <p>Create an exclusive map veto lobby for<br>Rainbow Six Siege</p>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/lol.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>League of Legends</h3>
                                    <p>Create an exclusive map veto lobby for<br>League of Legends</p>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/valorant.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>VALORANT</h3>
                                    <p>Create an exclusive map veto lobby for<br>VALORANT</p>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="content">
              <p>Content #3</p>
            </div>
            <div class="content">
                <p>Content #4</p>
            </div>
            <div class="content">
            <p>Content #5</p>
            </div> -->
            <!-- <div class="content">
                <div class="horizontal-tabs">
                    <div id="tabs-nav2">
                        <div class="addmatch-tab active">
                            <a href="#tab1-2" class="">Add Team</a>
                        </div>
                        <div class="listmatch-tab">
                            <a href="#tab2-2" class="">List Teams</a>
                        </div>
                        <div class="player-stat-tab">
                            <a href="#tab3-2" class="">Player Stats Settings</a>
                        </div>
                        
                    </div>
                    <div id="tabs-content2">
                        <div id="tab1-2" class="tab-content2">
                            <h1 class="main-head map-ban-bg">List Matches</h1>
                            <h2><i class="fas fa-arrow-down"></i> Pick your Game <i class="fas fa-arrow-down"></i></h2>
                            
                        </div>
                        <div id="tab2-2" class="tab-content2">
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f330633b64ea4.184513146175.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>ACARA GAMING</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f319f1c881041.927173512695.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>CLAW CENTRAL</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f33069bb14cc3.609355728159.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>POWERHAUS</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f31a24f4711d1.039485699255.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>PRISM ESPORTS</h3>
                                </a>
                            </div>
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f3453b8244cc9.946703553387.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TACTICAL BANDITRY</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5fbd4f263aa9e0.230201364273.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>Team 1</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f3707c2493722.990901622284.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TEAM FRONT</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f32f9ab0e4c73.229761431056.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TEAM REMEDY</h3>
                                </a>
                            </div>
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f3993a64f9991.310436889262.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>TROLL TEAM 6</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f344e16ad66c0.566210854068.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>UNREAL ACADEMY</h3>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/5f344e16ad66c0.566210854068.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>UNREAL NIGHTMARE</h3>
                                </a>
                            </div>
                        </div>
                        <div id="tab3-2" class="tab-content2">
                            <div class="row">
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/csgo.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>Counter Strike Global Offensive</h3>
                                    <p>Create an exclusive map veto lobby for<br>Counter Strike Global Offensive</p>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/r6s.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>Rainbow Six Siege</h3>
                                    <p>Create an exclusive map veto lobby for<br>Rainbow Six Siege</p>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/lol.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>League of Legends</h3>
                                    <p>Create an exclusive map veto lobby for<br>League of Legends</p>
                                </a>
                                <a href="#" class="img-box col mapban-border">
                                    <div class="inner-img">
                                        <img src="images/valorant.png" alt="" class="map-ban-bg rounded-circle">
                                    </div>
                                    <h3>VALORANT</h3>
                                    <p>Create an exclusive map veto lobby for<br>VALORANT</p>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="content">
            <p>Content #5</p>
            </div>
            <div class="content">
            <p>Content #6</p>
            </div> -->
          </div>
    </section>
    <footer id="footer" class="container-fluid map-ban-border">
        <div class="row">
            <div class="col-3 d-flex align-items-center">
                <div class="footer-logo">
                    <img src="images/header_logo.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="nav a-center text-center d-block">
                    <h3>Other</h3>
                    <ul class="mb-0 list-unstyled">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Media pack</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-5">
                <div class="nav a-center text-center d-block">
                    <h3>Legal</h3>
                    <ul class="mb-0 list-unstyled">
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1">
                <div class="social float-right d-flex flex-column a-center j-center mr-1 ml-1r">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitch"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="assets/js/jquerytest.js"></script>
</body>
</html>