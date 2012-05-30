<div data-role="content">

    <select name="select" id="select" data-mini="true">
        <option value="1">Filter...</option>
        <option value="2">Mitarbeiterinfos</option>
        <option value="3">Unternehmensinfos</option>
        <option value="4">Gruppeninfos</option>
    </select>

    <script type="text/javascript">
        $('#select').change(function()
        {
            var tableid = '#news_table_' + $(this).attr('value');
            for (var i=1; i <= 4; i++){
                $('#news_table_'+i).attr('style', 'display:none;');
            }
            $(tableid).attr('style', 'display:table;');
        });

        function getDatum(abzuziehendeTageVonHeute){
            var currentTime = new Date();
            currentTime.setDate(currentTime.getDate() - abzuziehendeTageVonHeute);
            var month = currentTime.getMonth() + 1;
            var day = currentTime.getDate();
            var year = currentTime.getFullYear();
            return day + "." + month + "." + year;
        }


    </script>

    <br />


    <table id="news_table_1" style="display:table;">
        <colgroup>
            <col width="35">
            <col>
        </colgroup>
        <tr>
            <th colspan=2><script type="text/javascript">document.write(getDatum(1));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/warning.png" width="35"></td>
            <td class="newsmsg">Im kommenden Quartal werden vorraussichtlich 15 zus&auml;tzliche KiTa- Pl&auml;tze ben&ouml;tigt.</td>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/information.png" width="35"></td>
            <td class="newsmsg">Die Anmeldung zur Infoveranstaltung zum Thema "Inklusion" ist nun m&ouml;glich.</td>
        </tr>
        <tr><td colspan=2>&nbsp;</td></tr>
        <tr>
            <th colspan=2><script type="text/javascript">document.write(getDatum(3));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/alarm.png" width="35"></td>
            <td class="newsmsg">Wegen einem Wasserrohrbruch ist die Nutzung der Toiletten derzeit nicht m&ouml;glich.</td>
        </tr>
        <tr><td colspan=2>&nbsp;</td></tr>
        <tr>
            <th colspan=2 class="newsdatum"><script type="text/javascript">document.write(getDatum(5));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/warning.png" width="35"></td>
            <td class="newsmsg">Meldung &uuml;ber schlecht ablaufendes Wasser auf der Herrentoilette.</td>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/information.png" width="35"></td>
            <td class="newsmsg">Die Regenbogengruppe nimmt heute 2 neue Kinder auf.</td>
        </tr>
        <tr>
            <td class="newspic">&nbsp;</td>
            <td class="newsmsg">Die Quartalszahlen liegen nun offiziell vor.</td>
        </tr>
        <tr><td colspan=2>&nbsp;</td></tr>
        <tr>
            <th colspan=2 class="newsdatum"><script type="text/javascript">document.write(getDatum(7));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/information.png" width="35"></td>
            <td class="newsmsg">Die Anmeldung zur Fortbildung zum zertifizierten Tagesst&auml;ttenleiter ist nun m&ouml;glich.</td>
        </tr>
    </table>

    <table id="news_table_2" style="display:none;">
        <colgroup>
            <col width="35">
            <col>
        </colgroup>
        <tr>
            <th colspan=2><script type="text/javascript">document.write(getDatum(1));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/information.png" width="35"></td>
            <td class="newsmsg">Die Anmeldung zur Infoveranstaltung zum Thema "Inklusion" ist nun m&ouml;glich.</td>
        </tr>
        <tr><td colspan=2>&nbsp;</td></tr>
        <tr>
            <th colspan=2 class="newsdatum"><script type="text/javascript">document.write(getDatum(7));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/information.png" width="35"></td>
            <td class="newsmsg">Die Anmeldung zur Fortbildung zum zertifizierten Tagesst&auml;ttenleiter ist nun m&ouml;glich.</td>
        </tr>
    </table>

    <table id="news_table_3" style="display:none;">
        <colgroup>
            <col width="35">
            <col>
        </colgroup>
        <tr>
            <th colspan=2><script type="text/javascript">document.write(getDatum(1));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/warning.png" width="35"></td>
            <td class="newsmsg">Im kommenden Quartal werden vorraussichtlich 15 zus&auml;tzliche KiTa- Pl&auml;tze ben&ouml;tigt.</td>
        </tr>
        <tr>
            <th colspan=2 class="newsdatum"><script type="text/javascript">document.write(getDatum(5));</script></th>
        </tr>
        <tr>
            <td class="newspic">&nbsp;</td>
            <td class="newsmsg">Die Quartalszahlen liegen nun offiziell vor.</td>
        </tr>
    </table>

    <table id="news_table_4" style="display:none;">
        <colgroup>
            <col width="35">
            <col>
        </colgroup>
        <tr>
            <th colspan=2 class="newsdatum"><script type="text/javascript">document.write(getDatum(5));</script></th>
        </tr>
        <tr>
            <td class="newspic"><img src="imgs/news/information.png" width="35"></td>
            <td class="newsmsg">Die Regenbogengruppe nimmt heute 2 neue Kinder auf.</td>
        </tr>
    </table>
</div>