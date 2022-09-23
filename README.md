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

<div>
    Sample Response   200 OK
    <pre>{
  "status": true,
  "message": "Banks retrieved",
  "data": [
    {
      "name": "Abbey Mortgage Bank",
      "slug": "abbey-mortgage-bank",
      "code": "801",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 174,
      "createdAt": "2020-12-07T16:19:09.000Z",
      "updatedAt": "2020-12-07T16:19:19.000Z"
    },
    {
      "name": "Access Bank",
      "slug": "access-bank",
      "code": "044",
      "longcode": "044150149",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 1,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T08:06:44.000Z"
    },
    {
      "name": "Access Bank (Diamond)",
      "slug": "access-bank-diamond",
      "code": "063",
      "longcode": "063150162",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 3,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T08:06:48.000Z"
    },
    {
      "name": "ALAT by WEMA",
      "slug": "alat-by-wema",
      "code": "035A",
      "longcode": "035150103",
      "gateway": "emandate",
      "pay_with_bank": true,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 27,
      "createdAt": "2017-11-15T12:21:31.000Z",
      "updatedAt": "2021-02-18T14:55:34.000Z"
    },
    {
      "name": "ASO Savings and Loans",
      "slug": "asosavings",
      "code": "401",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 63,
      "createdAt": "2018-09-23T05:52:38.000Z",
      "updatedAt": "2019-01-30T09:38:57.000Z"
    },
    {
      "name": "Bowen Microfinance Bank",
      "slug": "bowen-microfinance-bank",
      "code": "50931",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 108,
      "createdAt": "2020-02-11T15:38:57.000Z",
      "updatedAt": "2020-02-11T15:38:57.000Z"
    },
    {
      "name": "CEMCS Microfinance Bank",
      "slug": "cemcs-microfinance-bank",
      "code": "50823",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 74,
      "createdAt": "2020-03-23T15:06:13.000Z",
      "updatedAt": "2020-03-23T15:06:28.000Z"
    },
    {
      "name": "Citibank Nigeria",
      "slug": "citibank-nigeria",
      "code": "023",
      "longcode": "023150005",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 2,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:24:02.000Z"
    },
    {
      "name": "Coronation Merchant Bank",
      "slug": "coronation-merchant-bank",
      "code": "559",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 173,
      "createdAt": "2020-11-24T10:25:07.000Z",
      "updatedAt": "2020-11-24T10:25:07.000Z"
    },
    {
      "name": "Ecobank Nigeria",
      "slug": "ecobank-nigeria",
      "code": "050",
      "longcode": "050150010",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 4,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:23:53.000Z"
    },
    {
      "name": "Ekondo Microfinance Bank",
      "slug": "ekondo-microfinance-bank",
      "code": "562",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 64,
      "createdAt": "2018-09-23T05:55:06.000Z",
      "updatedAt": "2018-09-23T05:55:06.000Z"
    },
    {
      "name": "Eyowo",
      "slug": "eyowo",
      "code": "50126",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 167,
      "createdAt": "2020-09-07T13:52:22.000Z",
      "updatedAt": "2020-11-24T10:03:21.000Z"
    },
    {
      "name": "Fidelity Bank",
      "slug": "fidelity-bank",
      "code": "070",
      "longcode": "070150003",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 6,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T07:25:19.000Z"
    },
    {
      "name": "First Bank of Nigeria",
      "slug": "first-bank-of-nigeria",
      "code": "011",
      "longcode": "011151003",
      "gateway": "ibank",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 7,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2021-03-25T14:22:52.000Z"
    },
    {
      "name": "First City Monument Bank",
      "slug": "first-city-monument-bank",
      "code": "214",
      "longcode": "214150018",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 8,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T08:06:46.000Z"
    },
    {
      "name": "FSDH Merchant Bank Limited",
      "slug": "fsdh-merchant-bank-limited",
      "code": "501",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 112,
      "createdAt": "2020-08-20T09:37:04.000Z",
      "updatedAt": "2020-11-24T10:03:22.000Z"
    },
    {
      "name": "Globus Bank",
      "slug": "globus-bank",
      "code": "00103",
      "longcode": "103015001",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 70,
      "createdAt": "2020-02-11T15:38:57.000Z",
      "updatedAt": "2020-02-11T15:38:57.000Z"
    },
    {
      "name": "Guaranty Trust Bank",
      "slug": "guaranty-trust-bank",
      "code": "058",
      "longcode": "058152036",
      "gateway": "ibank",
      "pay_with_bank": true,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 9,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2021-01-01T11:22:11.000Z"
    },
    {
      "name": "Hackman Microfinance Bank",
      "slug": "hackman-microfinance-bank",
      "code": "51251",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 111,
      "createdAt": "2020-08-20T09:32:48.000Z",
      "updatedAt": "2020-11-24T10:03:24.000Z"
    },
    {
      "name": "Hasal Microfinance Bank",
      "slug": "hasal-microfinance-bank",
      "code": "50383",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 81,
      "createdAt": "2020-02-11T15:38:57.000Z",
      "updatedAt": "2020-02-11T15:38:57.000Z"
    },
    {
      "name": "Heritage Bank",
      "slug": "heritage-bank",
      "code": "030",
      "longcode": "030159992",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 10,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:24:23.000Z"
    },
    {
      "name": "Ibile Microfinance Bank",
      "slug": "ibile-mfb",
      "code": "51244",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 168,
      "createdAt": "2020-10-21T10:54:20.000Z",
      "updatedAt": "2020-10-21T10:54:33.000Z"
    },
    {
      "name": "Infinity MFB",
      "slug": "infinity-mfb",
      "code": "50457",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 172,
      "createdAt": "2020-11-24T10:23:37.000Z",
      "updatedAt": "2020-11-24T10:23:37.000Z"
    },
    {
      "name": "Jaiz Bank",
      "slug": "jaiz-bank",
      "code": "301",
      "longcode": "301080020",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 22,
      "createdAt": "2016-10-10T17:26:29.000Z",
      "updatedAt": "2016-10-10T17:26:29.000Z"
    },
    {
      "name": "Keystone Bank",
      "slug": "keystone-bank",
      "code": "082",
      "longcode": "082150017",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 11,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:23:45.000Z"
    },
    {
      "name": "Kuda Bank",
      "slug": "kuda-bank",
      "code": "50211",
      "longcode": "",
      "gateway": "digitalbankmandate",
      "pay_with_bank": true,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 67,
      "createdAt": "2019-11-15T17:06:54.000Z",
      "updatedAt": "2020-07-01T15:05:18.000Z"
    },
    {
      "name": "Lagos Building Investment Company Plc.",
      "slug": "lbic-plc",
      "code": "90052",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 109,
      "createdAt": "2020-08-10T15:07:44.000Z",
      "updatedAt": "2020-08-10T15:07:44.000Z"
    },
    {
      "name": "Mayfair MFB",
      "slug": "mayfair-mfb",
      "code": "50563",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 175,
      "createdAt": "2021-02-02T08:28:38.000Z",
      "updatedAt": "2021-02-02T08:28:38.000Z"
    },
    {
      "name": "One Finance",
      "slug": "one-finance",
      "code": "565",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 82,
      "createdAt": "2020-06-16T08:15:31.000Z",
      "updatedAt": "2020-06-16T08:15:31.000Z"
    },
    {
      "name": "PalmPay",
      "slug": "palmpay",
      "code": "999991",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 169,
      "createdAt": "2020-11-24T09:58:37.000Z",
      "updatedAt": "2020-11-24T10:03:19.000Z"
    },
    {
      "name": "Parallex Bank",
      "slug": "parallex-bank",
      "code": "526",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 26,
      "createdAt": "2017-03-31T13:54:29.000Z",
      "updatedAt": "2019-01-30T09:43:56.000Z"
    },
    {
      "name": "Parkway - ReadyCash",
      "slug": "parkway-ready-cash",
      "code": "311",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 110,
      "createdAt": "2020-08-10T15:07:44.000Z",
      "updatedAt": "2020-08-10T15:07:44.000Z"
    },
    {
      "name": "Paycom",
      "slug": "paycom",
      "code": "999992",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 171,
      "createdAt": "2020-11-24T10:20:45.000Z",
      "updatedAt": "2020-11-24T10:20:54.000Z"
    },
    {
      "name": "Petra Mircofinance Bank Plc",
      "slug": "petra-microfinance-bank-plc",
      "code": "50746",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 170,
      "createdAt": "2020-11-24T10:03:06.000Z",
      "updatedAt": "2020-11-24T10:03:06.000Z"
    },
    {
      "name": "Polaris Bank",
      "slug": "polaris-bank",
      "code": "076",
      "longcode": "076151006",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 13,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2016-07-14T10:04:29.000Z"
    },
    {
      "name": "Providus Bank",
      "slug": "providus-bank",
      "code": "101",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 25,
      "createdAt": "2017-03-27T16:09:29.000Z",
      "updatedAt": "2021-02-09T17:50:06.000Z"
    },
    {
      "name": "Rand Merchant Bank",
      "slug": "rand-merchant-bank",
      "code": "502",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 176,
      "createdAt": "2021-02-11T17:33:20.000Z",
      "updatedAt": "2021-02-11T17:33:20.000Z"
    },
    {
      "name": "Rubies MFB",
      "slug": "rubies-mfb",
      "code": "125",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 69,
      "createdAt": "2020-01-25T09:49:59.000Z",
      "updatedAt": "2020-01-25T09:49:59.000Z"
    },
    {
      "name": "Sparkle Microfinance Bank",
      "slug": "sparkle-microfinance-bank",
      "code": "51310",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 72,
      "createdAt": "2020-02-11T18:43:14.000Z",
      "updatedAt": "2020-02-11T18:43:14.000Z"
    },
    {
      "name": "Stanbic IBTC Bank",
      "slug": "stanbic-ibtc-bank",
      "code": "221",
      "longcode": "221159522",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 14,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:24:17.000Z"
    },
    {
      "name": "Standard Chartered Bank",
      "slug": "standard-chartered-bank",
      "code": "068",
      "longcode": "068150015",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 15,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:23:40.000Z"
    },
    {
      "name": "Sterling Bank",
      "slug": "sterling-bank",
      "code": "232",
      "longcode": "232150016",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 16,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2021-04-28T09:58:56.000Z"
    },
    {
      "name": "Suntrust Bank",
      "slug": "suntrust-bank",
      "code": "100",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 23,
      "createdAt": "2016-10-10T17:26:29.000Z",
      "updatedAt": "2016-10-10T17:26:29.000Z"
    },
    {
      "name": "TAJ Bank",
      "slug": "taj-bank",
      "code": "302",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 68,
      "createdAt": "2020-01-20T11:20:32.000Z",
      "updatedAt": "2020-01-20T11:20:32.000Z"
    },
    {
      "name": "TCF MFB",
      "slug": "tcf-mfb",
      "code": "51211",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 75,
      "createdAt": "2020-04-03T09:34:35.000Z",
      "updatedAt": "2020-04-03T09:34:35.000Z"
    },
    {
      "name": "Titan Bank",
      "slug": "titan-bank",
      "code": "102",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 73,
      "createdAt": "2020-03-10T11:41:36.000Z",
      "updatedAt": "2020-03-23T15:06:29.000Z"
    },
    {
      "name": "Union Bank of Nigeria",
      "slug": "union-bank-of-nigeria",
      "code": "032",
      "longcode": "032080474",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 17,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-02-18T20:22:54.000Z"
    },
    {
      "name": "United Bank For Africa",
      "slug": "united-bank-for-africa",
      "code": "033",
      "longcode": "033153513",
      "gateway": "emandate",
      "pay_with_bank": true,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 18,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2020-12-01T10:28:56.000Z"
    },
    {
      "name": "Unity Bank",
      "slug": "unity-bank",
      "code": "215",
      "longcode": "215154097",
      "gateway": "emandate",
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 19,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2019-07-22T12:44:02.000Z"
    },
    {
      "name": "VFD Microfinance Bank Limited",
      "slug": "vfd",
      "code": "566",
      "longcode": "",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": false,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 71,
      "createdAt": "2020-02-11T15:44:11.000Z",
      "updatedAt": "2020-10-28T09:42:08.000Z"
    },
    {
      "name": "Wema Bank",
      "slug": "wema-bank",
      "code": "035",
      "longcode": "035150103",
      "gateway": null,
      "pay_with_bank": false,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 20,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2021-02-09T17:49:59.000Z"
    },
    {
      "name": "Zenith Bank",
      "slug": "zenith-bank",
      "code": "057",
      "longcode": "057150013",
      "gateway": "emandate",
      "pay_with_bank": true,
      "active": true,
      "is_deleted": null,
      "country": "Nigeria",
      "currency": "NGN",
      "type": "nuban",
      "id": 21,
      "createdAt": "2016-07-14T10:04:29.000Z",
      "updatedAt": "2021-04-22T11:20:59.000Z"
    }
  ]
}</pre>
</div>
            </section>
        </div>
    </div>
</section>
