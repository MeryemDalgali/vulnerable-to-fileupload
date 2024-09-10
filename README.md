# File Upload Vulnerabilities and Bypass Techniques

This README provides an overview of common vulnerabilities in file upload implementations and techniques to bypass file upload controls. The provided code examples include checks for file extension, content type, and magic bytes. Each section describes potential bypass methods and how they can be exploited.

## 1. Extension Whitelist Bypass

### Bypass Techniques

1. **Double Extensions**: Attackers can use double extensions to bypass the whitelist. For example, a file named `malicious.php.jpg` may be accepted as a `.jpg` file but could execute PHP code if uploaded.

2. **Obfuscation**: Rename files with obfuscated or encoded extensions (e.g., `image.jpe` instead of `image.jpeg`).

**OWASP Reference:** [OWASP File Upload Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html)

## 2. Content Type Check Bypass

### Bypass Techniques

1. **MIME Type Spoofing**: Attackers can manipulate the `Content-Type` header in the file upload request to bypass checks.

2. **File Extension Mismatch**: A file may claim to be an `image/jpeg` but actually be a different type.

**OWASP Reference:** [OWASP MIME Type and File Extension Validation](https://owasp.org/www-community/controls/MIME_type)

## 3. Magic Byte Check Bypass

### Bypass Techniques

1. **Magic Byte Manipulation**: Attackers can create files with crafted magic bytes to bypass detection.

2. **File Padding**: Add extra bytes to the beginning of the file to obscure the real magic bytes.

**OWASP Reference:** [OWASP File Upload Cheat Sheet - File Content Inspection](https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html)

## Conclusion

While file upload controls are crucial for security, they can be bypassed using various techniques. It is essential to implement multiple layers of validation and always test your file upload handling for potential vulnerabilities.

For more information, refer to the [OWASP File Upload Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html) for comprehensive guidance on securing file uploads.
