# paystack-banklist-api

<section id="section-miscellaneous-bank">
    <div class="api-section">
        <div class="api-section--copy">
            <div>
                <h2 id="miscellaneous-bank" class="Permalink__H2-sc-1waa3o2-1 kzFlTM">
                    <a href="#miscellaneous-bank" aria-label="redirect permalink" class="anchor before">
                        <svg aria-hidden="true" focusable="false" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                            <path
                                fill-rule="evenodd"
                                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"
                            ></path>
                        </svg>
                    </a>
                    List Banks
                </h2>
                <section><p>Get a list of all supported banks and their properties</p></section>
                <section>
                    <table class="params-holder">
                        <caption class="params-group">
                            Query Param
                        </caption>
                        <tbody>
                            <tr>
                                <td class="param-details">
                                    <div class="param param-name">country</div>
                                    <div class="param param-type">String</div>
                                </td>
                                <td>The country from which to obtain the list of supported banks. e.g <code>country=ghana</code> or <code>country=nigeria</code></td>
                            </tr>
                            <tr>
                                <td class="param-details">
                                    <div class="param param-name">use_cursor</div>
                                    <div class="param param-type">boolean</div>
                                </td>
                                <td>Flag to enable cursor pagination on the endpoint</td>
                            </tr>
                            <tr>
                                <td class="param-details">
                                    <div class="param param-name">perPage</div>
                                    <div class="param param-type">Integer</div>
                                </td>
                                <td>The number of objects to return per page. Defaults to 50, and limited to 100 records per page.</td>
                            </tr>
                            <tr class="param-optional">
                                <td class="param-details">
                                    <div class="param param-name">pay_with_bank_transfer</div>
                                    <div class="param param-type">Boolean</div>
                                </td>
                                <td><div class="param param-desc">A flag to filter for available providers</div></td>
                            </tr>
                            <tr class="param-optional">
                                <td class="param-details">
                                    <div class="param param-name">next</div>
                                    <div class="param param-type">String</div>
                                </td>
                                <td><div class="param param-desc">A cursor that indicates your place in the list. It can be used to fetch the next page of the list</div></td>
                            </tr>
                            <tr class="param-optional">
                                <td class="param-details">
                                    <div class="param param-name">previous</div>
                                    <div class="param param-type">String</div>
                                </td>
                                <td><div class="param param-desc">A cursor that indicates your place in the list. It should be used to fetch the previous page of the list after an intial next request</div></td>
                            </tr>
                            <tr class="param-optional">
                                <td class="param-details">
                                    <div class="param param-name">gateway</div>
                                    <div class="param param-type">String</div>
                                </td>
                                <td><div class="param param-desc">The gateway type of the bank. It can be one of these: [emandate, digitalbankmandate]</div></td>
                            </tr>
                            <tr class="param-optional">
                                <td class="param-details">
                                    <div class="param param-name">type</div>
                                    <div class="param param-type">String</div>
                                </td>
                                <td>
                                    <div class="param param-desc">Type of financial channel. For Ghanaian channels, please use either <strong>mobile_money</strong> for mobile money channels OR <strong>ghipps</strong> for bank channels</div>
                                </td>
                            </tr>
                            <tr class="param-optional">
                                <td class="param-details">
                                    <div class="param param-name">currency</div>
                                    <div class="param param-type">String</div>
                                </td>
                                <td>
                                    <div class="param param-desc">Any of <code>NGN</code>, <code>USD</code>, <code>GHS</code> or <code>ZAR</code></div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="optional-toggle">
                                <th class="optional-toggle__title" colspan="3">
                                    <span class="optional-toggle-icon"></span>
                                    <span class="optional-toggle-text">
                                        Show<!-- -->
                                        optional parameters
                                    </span>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <div class="api-section--code">
            <section>
                <div class="APIReqRes__Container-sc-u45oxe-0 giNOHr">
                    <div class="Header__Container-sc-3080ts-0 hayFeg">
                        <div class="Header__Description-sc-3080ts-1 fgTfWi"><span class="Header__Label-sc-3080ts-2 dYeXKJ">GET</span><span class="title">/bank</span></div>
                        <div class="Header__Dropdown-sc-3080ts-3 kswQRF">
                            <select style="width: 50px;">
                                <option selected="">cURL</option>,
                                <option>Node</option>,
                                <option>PHP</option>
                            </select>
                            <div id="compute_select">cURL</div>
                        </div>
                    </div>
                    <!--cURL-->
                    <div class="request">
                        <div class="CodeSnippet__Container-sc-yot3xv-0 bkBPFs">
                            <pre
                                class="CodeSnippet__Pre-sc-yot3xv-1 irxUdw"
                            ><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">1</span><span class="token function" style="color:rgb(130, 170, 255)">curl</span><span class="token plain"> https://api.paystack.co/bank</span></div><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">2</span><span class="token plain">-H </span><span class="token string" style="color:rgb(173, 219, 103)">"Authorization: Bearer YOUR_SECRET_KEY"</span><span class="token plain"></span></div><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">3</span><span class="token plain">-X GET</span></div></pre>
                        </div>
                    </div>
                </div>
                <div class="APIReqRes__Container-sc-u45oxe-0 giNOHr">
    <div class="Header__Container-sc-3080ts-0 hayFeg">
        <div class="Header__Description-sc-3080ts-1 fgTfWi"><span class="Header__Label-sc-3080ts-2 dYeXKJ">GET</span><span class="title">/country</span></div>
        <div class="Header__Dropdown-sc-3080ts-3 kswQRF">
            <select style="width: 51px;">
                <option selected="">cURL</option>
                <option>Node</option>
                <option>PHP</option>
            </select>
            <div id="compute_select">Node</div>
        </div>
    </div>
    <div class="request">
        <div class="CodeSnippet__Container-sc-yot3xv-0 bkBPFs">
            <pre
                class="CodeSnippet__Pre-sc-yot3xv-1 irxUdw"
            ><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">1</span><span class="token plain" style="">const https </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token plain"> require</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token string" style="color: rgb(173, 219, 103);">'https'</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain"></span></div><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">2</span><span class="token plain" style="display: inline-block;">
</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">3</span><span class="token plain">const options </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">4</span><span class="token plain">  hostname: </span><span class="token string" style="color: rgb(173, 219, 103);">'api.paystack.co'</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">5</span><span class="token plain">  port: </span><span class="token number" style="color: rgb(247, 140, 108);">443</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">6</span><span class="token plain">  path: </span><span class="token string" style="color: rgb(173, 219, 103);">'/country'</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">7</span><span class="token plain">  method: </span><span class="token string" style="color: rgb(173, 219, 103);">'GET'</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">8</span><span class="token plain">  headers: </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">9</span><span class="token plain">    Authorization: </span><span class="token string" style="color: rgb(173, 219, 103);">'Bearer SECRET_KEY'</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">10</span><span class="token plain">  </span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">11</span><span class="token plain"></span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">12</span><span class="token plain" style="display: inline-block;">
</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">13</span><span class="token plain">https.request</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain">options, res </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">14</span><span class="token plain">  </span><span class="token builtin class-name" style="color: rgb(255, 203, 139);">let</span><span class="token plain"> data </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token plain"> </span><span class="token string" style="color: rgb(173, 219, 103);">''</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">15</span><span class="token plain" style="display: inline-block;">
</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">16</span><span class="token plain">  res.on</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token string" style="color: rgb(173, 219, 103);">'data'</span><span class="token plain">, </span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain">chunk</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain"> </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">17</span><span class="token plain">    data </span><span class="token operator" style="color: rgb(127, 219, 202);">+=</span><span class="token plain"> chunk</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">18</span><span class="token plain">  </span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">19</span><span class="token plain" style="display: inline-block;">
</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">20</span><span class="token plain">  res.on</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token string" style="color: rgb(173, 219, 103);">'end'</span><span class="token plain">, </span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain"> </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">21</span><span class="token plain">    console.log</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain">JSON.parse</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain">data</span><span class="token punctuation" style="color: rgb(199, 146, 234);">))</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">22</span><span class="token plain">  </span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">23</span><span class="token plain"></span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain">.on</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token string" style="color: rgb(173, 219, 103);">'error'</span><span class="token plain">, error </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">24</span><span class="token plain">  console.error</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain">error</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">25</span><span class="token plain"></span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span></div></pre>
        </div>
    </div>
</div>
<div class="APIReqRes__Container-sc-u45oxe-0 giNOHr">
    <div class="Header__Container-sc-3080ts-0 hayFeg">
        <div class="Header__Description-sc-3080ts-1 fgTfWi"><span class="Header__Label-sc-3080ts-2 dYeXKJ">GET</span><span class="title">/country</span></div>
        <div class="Header__Dropdown-sc-3080ts-3 kswQRF">
            <!--<select style="width: 44px;">
                <option selected="">cURL</option>
                <option>Node</option>
                <option>PHP</option>
            </select>-->
            <div id="compute_select">PHP</div>
        </div>
    </div>
    <div class="request">
        <div class="CodeSnippet__Container-sc-yot3xv-0 bkBPFs">
            <pre
                class="CodeSnippet__Pre-sc-yot3xv-1 irxUdw"
            ><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">1</span><span class="token operator" style="color: rgb(127, 219, 202);">&lt;</span><span class="token plain" style="">?php</span></div><div class="token-line" style="color:#d6deeb"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">2</span><span class="token plain" style="">  </span><span class="token variable" style="color: rgb(214, 222, 235);">$curl</span><span class="token plain"> </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token plain"> curl_init</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">3</span><span class="token plain">  </span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">4</span><span class="token plain">  curl_setopt_array</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token variable" style="color: rgb(214, 222, 235);">$curl</span><span class="token plain">, array</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">5</span><span class="token plain">    CURLOPT_URL </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token string" style="color: rgb(173, 219, 103);">"https://api.paystack.co/country"</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">6</span><span class="token plain">    CURLOPT_RETURNTRANSFER </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> true,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">7</span><span class="token plain">    CURLOPT_ENCODING </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token string" style="color: rgb(173, 219, 103);">""</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">8</span><span class="token plain">    CURLOPT_MAXREDIRS </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token number" style="color: rgb(247, 140, 108);">10</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">9</span><span class="token plain">    CURLOPT_TIMEOUT </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token number" style="color: rgb(247, 140, 108);">30</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">10</span><span class="token plain">    CURLOPT_HTTP_VERSION </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> CURL_HTTP_VERSION_1_1,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">11</span><span class="token plain">    CURLOPT_CUSTOMREQUEST </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> </span><span class="token string" style="color: rgb(173, 219, 103);">"GET"</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">12</span><span class="token plain" style="">    CURLOPT_HTTPHEADER </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span><span class="token plain"> array</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">13</span><span class="token plain">      </span><span class="token string" style="color: rgb(173, 219, 103);">"Authorization: Bearer SECRET_KEY"</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">14</span><span class="token plain">      </span><span class="token string" style="color: rgb(173, 219, 103);">"Cache-Control: no-cache"</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">15</span><span class="token plain" style="">    </span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain">,</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">16</span><span class="token plain">  </span><span class="token punctuation" style="color: rgb(199, 146, 234);">))</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">17</span><span class="token plain">  </span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">18</span><span class="token plain">  </span><span class="token variable" style="color: rgb(214, 222, 235);">$response</span><span class="token plain" style=""> </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token plain"> curl_exec</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token variable" style="color: rgb(214, 222, 235);">$curl</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">19</span><span class="token plain" style="">  </span><span class="token variable" style="color: rgb(214, 222, 235);">$err</span><span class="token plain"> </span><span class="token operator" style="color: rgb(127, 219, 202);">=</span><span class="token plain"> curl_error</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token variable" style="color: rgb(214, 222, 235);">$curl</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">20</span><span class="token plain" style="display: inline-block;">
</span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">21</span><span class="token plain">  curl_close</span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token variable" style="color: rgb(214, 222, 235);">$curl</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain" style=""></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">22</span><span class="token plain">  </span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">23</span><span class="token plain">  </span><span class="token keyword" style="color: rgb(127, 219, 202);">if</span><span class="token plain" style=""> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">(</span><span class="token variable" style="color: rgb(214, 222, 235);">$err</span><span class="token punctuation" style="color: rgb(199, 146, 234);">)</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain" style=""></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">24</span><span class="token plain">    </span><span class="token builtin class-name" style="color: rgb(255, 203, 139);">echo</span><span class="token plain"> </span><span class="token string" style="color: rgb(173, 219, 103);">"cURL Error #:"</span><span class="token plain"> </span><span class="token builtin class-name" style="color: rgb(255, 203, 139);">.</span><span class="token plain"> </span><span class="token variable" style="color: rgb(214, 222, 235);">$err</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">25</span><span class="token plain">  </span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token plain" style=""> </span><span class="token keyword" style="color: rgb(127, 219, 202);">else</span><span class="token plain"> </span><span class="token punctuation" style="color: rgb(199, 146, 234);">{</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">26</span><span class="token plain">    </span><span class="token builtin class-name" style="color: rgb(255, 203, 139);">echo</span><span class="token plain"> </span><span class="token variable" style="color: rgb(214, 222, 235);">$response</span><span class="token punctuation" style="color: rgb(199, 146, 234);">;</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">27</span><span class="token plain">  </span><span class="token punctuation" style="color: rgb(199, 146, 234);">}</span><span class="token plain"></span></div><div class="token-line" style="color: rgb(214, 222, 235);"><span class="CodeSnippet__LineNo-sc-yot3xv-2 dbgiXQ">28</span><span class="token plain">?</span><span class="token operator" style="color: rgb(127, 219, 202);">&gt;</span></div></pre>
        </div>
    </div>
</div>
            </section>
        </div>
    </div>
</section>
