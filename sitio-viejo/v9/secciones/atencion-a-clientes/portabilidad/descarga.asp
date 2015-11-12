<% 
    Response.ContentType = "application/octet-stream"
    FPath = server.mappath("/pdf/FORMATO_PORTABILIDAD.pdf")
    Response.AddHeader "Content-Disposition","attachment; filename=formato_portabilidad.pdf"
    Set adoStream = CreateObject("ADODB.Stream")
    adoStream.Open()
    adoStream.Type = 1
    adoStream.LoadFromFile(FPath)
    Response.BinaryWrite adoStream.Read()
    adoStream.Close
    Set adoStream = Nothing
    Response.End
%>