

<div class="portfolio">
    <div id='ptitle'>{players}
        <p>Peanuts: {peanuts}</p>
        <form method = "post">
            <input type="submit" name="buyCards" value='Buy cards' />
        </form>{status}</div>
    <div id="trading">
        <p class='portfolioTitle'> Trading Activities </p>
        <table class="porttables">
            <tr>
                <th>DateTime</th>
                <th>Player</th>
                <th>Series</th>
                <th>Transaction</th>
            </tr>
            {transactions}
            <tr>
                <td>{DateTime}</td>
                <td>{Player}</td>
                <td>{Series}</td>
                <td>{Trans}</td>
            </tr>
            {/transactions}
        </table>

    </div>

    <div id="holdings">
        <p class='portfolioTitle'> Current Holdings </p>
        <table class="porttables">

            <tr>
                <th>Series</th>
                <th>Top piece</th>
                <th>Middle piece</th>
                <th>Bottom piece</th>
            </tr>
            <tr>
                <td>11a</td>
                <td class="holdings"><img src="/asset/images/11a-0.jpeg" title="11a-0"/> <br />{card11a-0}</td>
                <td class="holdings"><img src="/asset/images/11a-1.jpeg" title="11a-1"/> <br />{card11a-1}</td>
                <td class="holdings"><img src="/asset/images/11a-2.jpeg" title="11a-2"/> <br />{card11a-2}</td>
            </tr>
            <tr>
                <td>11b</td>
                <td class="holdings"><img src="/asset/images/11b-0.jpeg" title="11b-0"/> <br />{card11b-0}</td>
                <td class="holdings"><img src="/asset/images/11b-1.jpeg" title="11b-1"/> <br />{card11b-1}</td>
                <td class="holdings"><img src="/asset/images/11b-2.jpeg" title="11b-2"/> <br />{card11b-2}</td>
            </tr>
            <tr>
                <td>11c</td>
                <td class="holdings"><img src="/asset/images/11c-0.jpeg" title="11c-0"/> <br />{card11c-0}</td>
                <td class="holdings"><img src="/asset/images/11c-1.jpeg" title="11c-1"/> <br />{card11c-1}</td>
                <td class="holdings"><img src="/asset/images/11c-2.jpeg" title="11c-2"/> <br />{card11c-2}</td>
            </tr>
            <tr>
                <td>11d</td>
                <td class="holdings"><img src="/asset/images/11d-0.jpeg" title="11c-0"/> <br />{card11d-0}</td>
                <td class="holdings"><img src="/asset/images/11d-1.jpeg" title="11c-1"/> <br />{card11d-1}</td>
                <td class="holdings"><img src="/asset/images/11d-2.jpeg" title="11c-2"/> <br />{card11d-2}</td>
            </tr>
            <tr>
                <td>11e</td>
                <td class="holdings"><img src="/asset/images/11e-0.jpeg" title="11c-0"/> <br />{card11e-0}</td>
                <td class="holdings"><img src="/asset/images/11e-1.jpeg" title="11c-1"/> <br />{card11e-1}</td>
                <td class="holdings"><img src="/asset/images/11e-2.jpeg" title="11c-2"/> <br />{card11e-2}</td>
            </tr>
            <tr>
                <td>13a</td>
                <td class="holdings"><img src="/asset/images/13a-0.jpeg" title="13c-0"/> <br />{card13a-0}</td>
                <td class="holdings"><img src="/asset/images/13a-1.jpeg" title="13c-1"/> <br />{card13a-1}</td>
                <td class="holdings"><img src="/asset/images/13a-2.jpeg" title="13c-2"/> <br />{card13a-2}</td>
            </tr>
            <tr>
                <td>13b</td>
                <td class="holdings"><img src="/asset/images/13b-0.jpeg" title="13d-0"/> <br />{card13b-0}</td>
                <td class="holdings"><img src="/asset/images/13b-1.jpeg" title="13d-1"/> <br />{card13b-1}</td>
                <td class="holdings"><img src="/asset/images/13b-2.jpeg" title="13d-2"/> <br />{card13b-2}</td>
            </tr>
            <tr>
                <td>13c</td>
                <td class="holdings"><img src="/asset/images/13c-0.jpeg" title="13c-0"/> <br />{card13c-0}</td>
                <td class="holdings"><img src="/asset/images/13c-1.jpeg" title="13c-1"/> <br />{card13c-1}</td>
                <td class="holdings"><img src="/asset/images/13c-2.jpeg" title="13c-2"/> <br />{card13c-2}</td>
            </tr>
            <tr>
                <td>13d</td>
                <td class="holdings"><img src="/asset/images/13d-0.jpeg" title="13d-0"/> <br />{card13d-0}</td>
                <td class="holdings"><img src="/asset/images/13d-1.jpeg" title="13d-1"/> <br />{card13d-1}</td>
                <td class="holdings"><img src="/asset/images/13d-2.jpeg" title="13d-2"/> <br />{card13d-2}</td>
            </tr>
            <tr>
                <td>26a</td>
                <td class="holdings"><img src="/asset/images/26a-0.jpeg" title="26a-0"/> <br />{card26a-0}</td>
                <td class="holdings"><img src="/asset/images/26a-1.jpeg" title="26a-1"/> <br />{card26a-1}</td>
                <td class="holdings"><img src="/asset/images/26a-2.jpeg" title="26a-2"/> <br />{card26a-2}</td>
            </tr>
            <tr>
                <td>26b</td>
                <td class="holdings"><img src="/asset/images/26b-0.jpeg" title="26b-0"/> <br />{card26b-0}</td>
                <td class="holdings"><img src="/asset/images/26b-1.jpeg" title="26b-1"/> <br />{card26b-1}</td>
                <td class="holdings"><img src="/asset/images/26b-2.jpeg" title="26b-2"/> <br />{card26b-2}</td>
            </tr>
            <tr>
                <td>26h</td>
                <td class="holdings"><img src="/asset/images/26h-0.jpeg" title="26h-0"/> <br />{card26h-0}</td>
                <td class="holdings"><img src="/asset/images/26h-1.jpeg" title="26h-1"/> <br />{card26h-1}</td>
                <td class="holdings"><img src="/asset/images/26h-2.jpeg" title="26h-2"/> <br />{card26h-2}</td>
            </tr>

        </table>
    </div>
</div>
