using System;
using System.Data;
using System.Data.SqlClient;
using QLSV.frm;
namespace QLSV
{
    class Functions
    {
        public static SqlConnection conn;

        public static void KetNoiCSDL()
        {
            string connStr = @"Data Source=MAY04\SQLEXPRESS;Initial Catalog=QLSV;Integrated Security=True";

            conn = new SqlConnection(connStr);
            if (conn.State != ConnectionState.Open)
            {
                conn.Open();
            }
        }
    }
}