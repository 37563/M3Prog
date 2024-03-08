# Functions

    - strtoupper
    - strpos    
    - file_exist
  
## Parameter

- **String** The input string
  
- **Haystack** The string to search in
  **Needle** the string to search for 
  **offset** If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string  

- **Filename** Path to the file or directory

### Returns

- Returns the uppercased string. 

- Returns the position of where the needle exists relative to the beginning 
  of the haystack string (independent of offset). 
  Also note that string positions start at 0, and not 1.

  Returns false if the needle was not found. 

- Returns true if the file or directory specified by filename exists; false otherwise. 