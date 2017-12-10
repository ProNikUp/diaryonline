	function Table()
		{
			this.create = function(id, rows, cols)
			{
				newelem = document.createElement("table");
				newelem.contentEditable = true;
				newelem.border=1;
				for(i=0; i<rows; i++)
				{
					row=newelem.insertRow(0)
					for(j=0; j<cols; j++)
					{
						col=row.insertCell(0);
					}
				}
				
				document.getElementById(id).appendChild(newelem);
				this.t = newelem;				
			}
			this.get = function(r, c)
			{
				body=this.t.tBodies[0];
				row=body.rows[r];
				cell=row.cells[c];
				return cell.innerHTML;
			}
			this.set = function(r, c, val)
			{
				body=this.t.tBodies[0];
				row=body.rows[r];
				cell=row.cells[c];
				cell.innerHTML=val;
			}
		}