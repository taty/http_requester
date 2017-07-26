<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <section id="header">            
        </section>
        <section id="content">
            <form action="main.php">
                <div class="starting_heading">
                    <p><label for="url">URL</label>
                        <input name="url" type="text" />                           
                    </p>
                    <p><label for="http_version">HTTP version</label>
                       <select name="http_version">
                           <option value="0.9">0.9</option>
                           <option value="1.0">1.0</option>
                           <option value="1.1" selected="selected">1.1</option>
                       </select>
                    </p>
                    <p><label for="content_type">Content Type</label>
                       <select name="content_type">
                           <option value="text/html">text/html</option>
                           <option value="text/xml">text/xml</option>
                           <option value="application/rdf+xml">application/rdf+xml</option>
                           <option value="application/xml">application/xml</option>
                           <option value="text/plain">text/plain</option>
                           <option value="application/json">application/json</option>
                       </select>
                    </p>
                    <div class="headers"><label for="headers[]">Headers</label>
                       <select name="headers[]">
                           <option value="Autorization">Autorization</option>
                           <option value="Accept">Accept</option>
                           <option value="Accept-encoding">Accept-encoding</option>
                           <option value="Cookie">Cookie</option>
                           <option value="if-Match">if-Match</option>
                       </select>
                       <input type="text" name="headers_value[]" />    
                       <input type="button" name="add_change_header" value="Add/Change" />
                    </div>
                    <p><label for="request_method">Request method</label>
                       <select name="request_method">
                           <option value="GET" selected="selected">GET</option>
                           <option value="HEAD">HEAD</option>
                           <option value="POST">POST</option>
                           <option value="PUT">PUT</option>
                           <option value="DELETE">DELETE</option>
                           <option value="TRACE">TRACE</option>
                           <option value="OPTIONS">OPTIONS</option>                        
                           <option value="CONNECT">CONNECT</option>             
                           <option value="PATCH">PATCH</option>          
                           <option value="LINK">LINK</option>          
                           <option value="UNLINK">UNLINK</option>      
                           <option value="CONNECT">CONNECT</option>      
                       </select>
                    </p>
                    <div class="parameters"><label for="parameters[]">Parameters</label>
                        <input type="text" name="parameters_key[]" />    
                        <input type="text" name="parameters_value[]" />    
                        <input type="button" name="add_change_parameters" value="Add/Change" />
                    </div>
                </div>
                <div class="headers">
                </div>
                <div class="message_body">
                </div>
            </form>
        </section>
        <section id="footer">
        </section>
    </body>
</html>