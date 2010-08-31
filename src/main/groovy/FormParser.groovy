import org.apache.commons.fileupload.FileItemIterator
import org.apache.commons.fileupload.FileItemStream
import org.apache.commons.fileupload.servlet.ServletFileUpload
import java.util.logging.*
import org.apache.commons.io.*


class FormParser {
	
	@SuppressWarnings("unchecked")
	static Map parse(request) {
		
		Logger log = Logger.getLogger(FormParser.class.name)
		def fields = [:]
		
		try {
			ServletFileUpload upload = new ServletFileUpload()
			
			// Pega os parametros/anexo do form
			FileItemIterator iterator = upload.getItemIterator(request)
			while (iterator.hasNext()) {
				FileItemStream item = iterator.next()
				InputStream stream = item.openStream()
				
				try {
					if (item.isFormField()) {
						fields[item.fieldName] = IOUtils.toString(stream)
					} else {
						fields[item.fieldName] = IOUtils.toByteArray(stream)
						fields.fileName = item.name
					}
				} finally {
					IOUtils.closeQuietly(stream);
				}
			}
			
			return fields
		} catch (Exception e) {
			log.log(Level.SEVERE, "Error parsing form", e)
			throw e;
		}
		
	}
	
}
