import javax.servlet.http.Cookie

idioma = params.idioma
pagina = params.pag

cookie = new Cookie("averone", idioma)
cookie.setMaxAge(3600*24*180)
response.addCookie(cookie)

response.sendRedirect(idioma + "/" + pagina)
