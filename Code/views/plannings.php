<!DOCTYPE html>
<html lang="fr">

<?php

if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php?page=session");
    exit;
}
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Plannings - MyNewGes</title>
</head>

<body>
    <nav>
        <?php
        require("menu.php")
        ?>

        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Mon Planning</span>
            </div>
            <form id="calendar" name="calendar" method="post" action="/student/planning-calendar" enctype="application/x-www-form-urlencoded">
                <input type="hidden" name="calendar" value="calendar" />
                <div id="calendar:j_idt163" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="padding: 10px;border: none;" data-widget="widget_calendar_j_idt163">
                    <div id="calendar:j_idt163_content" class="ui-panel-content ui-widget-content"><span id="calendar:messages"></span>
                        <script id="calendar:messages_s" type="text/javascript">
                            $(function() {
                                PrimeFaces.cw('Growl', 'widget_calendar_messages', {
                                    id: 'calendar:messages',
                                    sticky: false,
                                    life: 6000,
                                    escape: true,
                                    msgs: []
                                });
                            });
                        </script>
                        <table cellpadding="0" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td><button id="calendar:previousMonth" name="calendar:previousMonth" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="PrimeFaces.ab({s:'calendar:previousMonth',u:'calendar:myschedule calendar:currentDate calendar:currentWeek calendar:campuses calendar:lastUpdate'});return false;" style="margin-right: 0; padding-right: 0" type="submit"><span class="ui-button-text ui-c">◄</span></button>
                                        <script id="calendar:previousMonth_s" type="text/javascript">
                                            PrimeFaces.cw("CommandButton", "widget_calendar_previousMonth", {
                                                id: "calendar:previousMonth",
                                                widgetVar: "widget_calendar_previousMonth"
                                            });
                                        </script>
                                    </td>
                                    <td><button id="calendar:nextMonth" name="calendar:nextMonth" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="PrimeFaces.ab({s:'calendar:nextMonth',u:'calendar:myschedule calendar:currentDate calendar:currentWeek calendar:campuses calendar:lastUpdate'});return false;" style="margin-left: 0; padding-left: 0" type="submit"><span class="ui-button-text ui-c">►</span></button>
                                        <script id="calendar:nextMonth_s" type="text/javascript">
                                            PrimeFaces.cw("CommandButton", "widget_calendar_nextMonth", {
                                                id: "calendar:nextMonth",
                                                widgetVar: "widget_calendar_nextMonth"
                                            });
                                        </script>
                                    </td>
                                    <td><img id="calendar:j_idt165" width="9" height="0" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                    <td><button id="calendar:currentDate" name="calendar:currentDate" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-disabled" onclick="PrimeFaces.ab({s:'calendar:currentDate',u:'calendar:myschedule calendar:currentDate calendar:currentWeek calendar:campuses calendar:lastUpdate'});return false;" type="submit" disabled="disabled"><span class="ui-button-text ui-c">Maintenant</span></button>
                                        <script id="calendar:currentDate_s" type="text/javascript">
                                            PrimeFaces.cw("CommandButton", "widget_calendar_currentDate", {
                                                id: "calendar:currentDate",
                                                widgetVar: "widget_calendar_currentDate"
                                            });
                                        </script>
                                    </td>
                                    <td><img id="calendar:j_idt166" width="50" height="0" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                    <td><label id="calendar:currentWeek" class="ui-outputlabel ui-widget" style="font-weight: bold">1 avril - 7 avril 2024</label></td>
                                    <td><img id="calendar:j_idt168" width="50" height="0" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                    <td><label id="calendar:lastUpdate" class="ui-outputlabel ui-widget"> Mise à jour le : <br /> 2 avril 2024 à 17:03</label></td>
                                    <td><img id="calendar:j_idt170" width="15" height="0" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                    <td><button id="calendar:j_idt171" name="calendar:j_idt171" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only" onclick="PrimeFaces.ab({s:'calendar:j_idt171',u:'calendar:myschedule calendar:currentDate calendar:currentWeek calendar:campuses calendar:lastUpdate'});return false;" label="test" type="submit"><span class="ui-button-icon-left ui-icon ui-c refreshButtonImg"></span><span class="ui-button-text ui-c">ui-button</span></button>
                                        <script id="calendar:j_idt171_s" type="text/javascript">
                                            PrimeFaces.cw("CommandButton", "widget_calendar_j_idt171", {
                                                id: "calendar:j_idt171",
                                                widgetVar: "widget_calendar_j_idt171"
                                            });
                                        </script>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="calendar:j_idt172" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="margin: 20px 40px 15px 40px; text-align: center" data-widget="widget_calendar_j_idt172">
                            <div id="calendar:j_idt172_content" class="ui-panel-content ui-widget-content"><span style="font-weight: bold; margin: auto;">Cliquer sur un élément du planning pour obtenir plus d'informations</span></div>
                        </div>
                        <script id="calendar:j_idt172_s" type="text/javascript">
                            PrimeFaces.cw("Panel", "widget_calendar_j_idt172", {
                                id: "calendar:j_idt172",
                                widgetVar: "widget_calendar_j_idt172"
                            });
                        </script>
                        <div id="calendar:myschedule">
                            <div id="calendar:myschedule_container"></div><input type="hidden" id="calendar:myschedule_view" name="calendar:myschedule_view" autocomplete="off" value="agendaWeek" />
                        </div>
                        <script id="calendar:myschedule_s" type="text/javascript">
                            $(function() {
                                PrimeFaces.cw("Schedule", "widget_calendar_myschedule", {
                                    id: "calendar:myschedule",
                                    widgetVar: "widget_calendar_myschedule",
                                    defaultView: "agendaWeek",
                                    locale: "fr",
                                    offset: 7200000,
                                    year: 2024,
                                    month: 3,
                                    date: 2,
                                    header: false,
                                    allDaySlot: false,
                                    minTime: "07:00",
                                    maxTime: "24:00",
                                    aspectRatio: 0.01,
                                    disableDragging: true,
                                    disableResizing: true,
                                    axisFormat: "HH:mm",
                                    timeFormat: "HH:mm{ - HH:mm}",
                                    columnFormat: {
                                        week: 'ddd. d/MM/yy'
                                    },
                                    behaviors: {
                                        eventSelect: function(ext) {
                                            PrimeFaces.ab({
                                                s: 'calendar:myschedule',
                                                e: 'eventSelect',
                                                p: 'calendar:myschedule',
                                                u: '@(.dlg1)',
                                                onco: function(xhr, status, args) {
                                                    PF('dlg1').show();
                                                }
                                            }, ext);
                                        }
                                    }
                                }, "schedule");
                            });
                        </script>
                        <div id="calendar:campuses" class="ui-datalist ui-widget">
                            <div class="ui-datalist-header ui-widget-header ui-corner-top">
                                Campus
                            </div>
                            <div id="calendar:campuses_content" class="ui-datalist-content ui-widget-content">
                                <ol id="calendar:campuses_list" class="ui-datalist-data">
                                    <li class="ui-datalist-item">
                                        <a href="https://www.google.fr/maps/place/46+Rue+de+la+Justice,+51100+Reims" target="_blank">
                                            <span style="display: inline-block; width: 10px; height: 10px; border: 1px solid black; background: #C294F2; padding: 0; margin:0"></span>
                                            <b> REIMS JUSTICE : 46 rue de la Justice REIMS 51100 </b>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <script id="calendar:campuses_s" type="text/javascript">
                            $(function() {
                                PrimeFaces.cw("DataList", "widget_calendar_campuses", {
                                    id: "calendar:campuses",
                                    widgetVar: "widget_calendar_campuses"
                                });
                            });
                        </script>
                        <div style="text-align: right">Emploi du temps prévisionnel, sous réserve de modification</div>
                    </div>
                </div>
                <script id="calendar:j_idt163_s" type="text/javascript">
                    PrimeFaces.cw("Panel", "widget_calendar_j_idt163", {
                        id: "calendar:j_idt163",
                        widgetVar: "widget_calendar_j_idt163"
                    });
                </script><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="-8555662938388835381:4363788608159275939" autocomplete="off" />
            </form>
            <div id="j_idt177" class="ui-dialog ui-widget ui-widget-content ui-overlay-hidden ui-corner-all ui-shadow">
                <div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top"><span id="j_idt177_title" class="ui-dialog-title">Cours</span><a href="#" class="ui-dialog-titlebar-icon ui-dialog-titlebar-close ui-corner-all"><span class="ui-icon ui-icon-closethick"></span></a></div>
                <div class="ui-dialog-content ui-widget-content">
                    <table id="dlg1" class="dlg1" cellpadding="5">
                        <tbody>
                            <tr>
                                <td><label for="duration">Durée:</label></td>
                                <td><span id="duration"></span></td>
                            </tr>
                            <tr>
                                <td><img id="j_idt179" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                <td><img id="j_idt180" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                            </tr>
                            <tr>
                                <td><label for="matiere">Matière:</label></td>
                                <td><span id="matiere"></span></td>
                            </tr>
                            <tr>
                                <td><label for="intervenant">Intervenant:</label></td>
                                <td><span id="intervenant"></span></td>
                            </tr>
                            <tr>
                                <td><img id="j_idt183" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                <td><img id="j_idt184" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                            </tr>
                            <tr>
                                <td><label for="salle">Salle:</label></td>
                                <td><span id="salle"></span></td>
                            </tr>
                            <tr>
                                <td><img id="j_idt186" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                <td><img id="j_idt187" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                            </tr>
                            <tr>
                                <td><label for="type">Type :</label></td>
                                <td><span id="type"></span></td>
                            </tr>
                            <tr>
                                <td><label for="modality">Modalité :</label></td>
                                <td><span id="modality"></span></td>
                            </tr>
                            <tr>
                                <td><img id="j_idt190" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                                <td><img id="j_idt191" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.jsf?ln=primefaces&amp;v=5.1" /></td>
                            </tr>
                            <tr>
                                <td><label for="commentaire"></label></td>
                                <td><span id="commentaire"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <script id="j_idt177_s" type="text/javascript">
                $(function() {
                    PrimeFaces.cw("Dialog", "dlg1", {
                        id: "j_idt177",
                        widgetVar: "dlg1",
                        resizable: false
                    });
                });
            </script>
            <?php require("footer.php") ?>
        </section>
    </nav>
    <script src="assets/js/script.js"></script>
</body>

</html>