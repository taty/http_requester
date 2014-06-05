<!DOCTYPE html>
<html>
    <head>
        <title>Http Requester</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />        
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />    
                    			
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--[if IE 7]>
            <link rel="stylesheet" href="/css/ie7.css" type="text/css" media="screen" />
        <![endif]-->
    
        <script src='js/script.js' type='text/javascript' charset='UTF-8'></script>
    </head>
    <body>
        <section id="header">    
            <h2>Http Requester</h2>
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
                    <div id="headers"><label for="headers[]">Headers</label>
                       <div class="header_elem">
                            <select name="headers[]">
                                <option value="Autorization">Autorization</option>
                                <option value="Accept">Accept</option>
                                <option value="Accept-encoding">Accept-encoding</option>
                                <option value="Cookie">Cookie</option>
                                <option value="if-Match">if-Match</option>
                            </select>
                            <input type="text" name="headers_value[]" />                                
                       </div>
                       <input type="button" name="add_change_header" value="Add/Change" onclick="ns.addChangeHeader()" /> 
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
                    <div id="parameters"><label for="parameters[]">Parameters</label>
                        <div class="parameter_elem">
                            <input type="text" name="parameters_key[]" />    
                            <input type="text" name="parameters_value[]" />                                
                        </div>
                        <input type="button" name="add_change_parameter" value="Add/Change" onclick="ns.addChangeParameter()" />
                    </div>
                    <div id="buttons">
                        <input type="submit" value="Send">
                    </div>
                </div>                
                <div class="message_body">
                </div>
            </form>
        </section>
        <section id="footer">
        </section>
    </body>
</html>