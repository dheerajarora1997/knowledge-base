
# Knowledge  base

Sample code HTML, CSS, JavaScript, jQuery and plugin customization
### Deployment

https://knowledge-base-d4x.pages.dev

#### Github Repositories
https://github.com/dheerajarora1997/knowledge-base

#### Developer 
https://www.linkedin.com/in/dheerajarora1997/

# HTTP Status Codes

## 1xx: Informational
- **100 Continue**: The server has received the request headers, and the client should proceed to send the request body.
- **101 Switching Protocols**: The requester has asked the server to switch protocols, and the server has agreed to do so.
- **102 Processing**: The server has received and is processing the request, but no response is available yet.

## 2xx: Success
- **200 OK**: The request was successful, and the server returned the requested resource.
- **201 Created**: The request has been fulfilled, and a new resource has been created.
- **202 Accepted**: The request has been accepted for processing, but the processing is not complete.
- **203 Non-Authoritative Information**: The request was successful, but the returned meta-information is from a local or third-party copy instead of the origin server.
- **204 No Content**: The server successfully processed the request, but there is no content to return.
- **205 Reset Content**: The server successfully processed the request, but asks that the requester reset the view that sent the request.
- **206 Partial Content**: The server is delivering only part of the resource due to a range header sent by the client.

## 3xx: Redirection
- **300 Multiple Choices**: The request has more than one possible response. The user-agent or user should choose one of them.
- **301 Moved Permanently**: The URL of the requested resource has been changed permanently. The new URL is given in the response.
- **302 Found**: The URI of the requested resource has been changed temporarily. The new URI is given in the response.
- **303 See Other**: The response to the request can be found under another URI using the GET method.
- **304 Not Modified**: The resource has not been modified since the last request.
- **305 Use Proxy**: The requested resource is only available through a proxy, whose address is provided in the response.
- **307 Temporary Redirect**: The URI of the requested resource has been changed temporarily. The new URI is given in the response.
- **308 Permanent Redirect**: The URI of the requested resource has been changed permanently. The new URI is given in the response.

## 4xx: Client Errors
- **400 Bad Request**: The server could not understand the request due to invalid syntax.
- **401 Unauthorized**: The client must authenticate itself to get the requested response.
- **402 Payment Required**: This code is reserved for future use.
- **403 Forbidden**: The client does not have access rights to the content.
- **404 Not Found**: The server can not find the requested resource.
- **405 Method Not Allowed**: The request method is known by the server but is not supported by the target resource.
- **406 Not Acceptable**: The server cannot produce a response matching the list of acceptable values defined in the request's proactive content negotiation headers.
- **407 Proxy Authentication Required**: The client must first authenticate itself with the proxy.
- **408 Request Timeout**: The server would like to shut down this unused connection.
- **409 Conflict**: The request conflicts with the current state of the server.
- **410 Gone**: The content requested is no longer available and will not be available again.
- **411 Length Required**: The server refuses to accept the request without a defined Content-Length header.
- **412 Precondition Failed**: The client has indicated preconditions in its headers which the server does not meet.
- **413 Payload Too Large**: The request is larger than the server is willing or able to process.
- **414 URI Too Long**: The URI requested by the client is longer than the server is willing to interpret.
- **415 Unsupported Media Type**: The media format of the requested data is not supported by the server.
- **416 Range Not Satisfiable**: The range specified by the Range header field in the request cannot be fulfilled.
- **417 Expectation Failed**: The server cannot meet the requirements of the Expect request-header field.
- **418 I'm a teapot**: This code was defined in 1998 as an April Fools' joke. It is not expected to be implemented by actual HTTP servers.
- **421 Misdirected Request**: The request was directed at a server that is not able to produce a response.
- **422 Unprocessable Entity**: The request was well-formed but was unable to be followed due to semantic errors.
- **423 Locked**: The resource that is being accessed is locked.
- **424 Failed Dependency**: The request failed due to failure of a previous request.
- **425 Too Early**: The server is unwilling to risk processing a request that might be replayed.
- **426 Upgrade Required**: The client should switch to a different protocol.
- **428 Precondition Required**: The origin server requires the request to be conditional.
- **429 Too Many Requests**: The user has sent too many requests in a given amount of time.
- **431 Request Header Fields Too Large**: The server is unwilling to process the request because its header fields are too large.
- **451 Unavailable For Legal Reasons**: The user requests an illegal resource, such as a web page censored by a government.

## 5xx: Server Errors
- **500 Internal Server Error**: The server has encountered a situation it doesn't know how to handle.
- **501 Not Implemented**: The request method is not supported by the server and cannot be handled.
- **502 Bad Gateway**: The server, while working as a gateway to get a response needed to handle the request, got an invalid response.
- **503 Service Unavailable**: The server is not ready to handle the request.
- **504 Gateway Timeout**: The server is acting as a gateway and cannot get a response in time.
- **505 HTTP Version Not Supported**: The HTTP version used in the request is not supported by the server.
- **506 Variant Also Negotiates**: Transparent content negotiation for the request results in a circular reference.
- **507 Insufficient Storage**: The server is unable to store the representation needed to complete the request.
- **508 Loop Detected**: The server detected an infinite loop while processing the request.
- **510 Not Extended**: Further extensions to the request are required for the server to fulfill it.
- **511 Network Authentication Required**: The client needs to authenticate to gain network access.

