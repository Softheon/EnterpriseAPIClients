// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// Defines the criteria to perform a query on queues
    /// </summary>
    public partial class GetQueueModel
    {
        /// <summary>
        /// Initializes a new instance of the GetQueueModel class.
        /// </summary>
        public GetQueueModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the GetQueueModel class.
        /// </summary>
        /// <param name="id">Gets or sets the queue identifier.</param>
        /// <param name="name">Gets or sets the name.</param>
        /// <param name="alias">Gets or sets the alias.</param>
        /// <param name="type">Gets or sets the type. Possible values include:
        /// 'Inbound', 'Outbound', 'Access', 'Any', 'Shared', 'Public',
        /// 'Recycle', 'Fax', 'Print', 'Scan', 'Ocr', 'Workflow', 'Schedule',
        /// 'System', 'Other', 'CdoInfostore', 'CdoFolder'</param>
        /// <param name="access">Gets or sets the access level.</param>
        /// <param name="bypassSecurity">Gets or sets a value indicating
        /// whether to bypass security checks.</param>
        /// <param name="page">Gets or sets the page number.</param>
        /// <param name="pageSize">Gets or sets the size of the page.</param>
        /// <param name="sortOrder">Gets or sets the order. Possible values
        /// include: 'Unspecified', 'Ascending', 'Descending'</param>
        /// <param name="sortBy">Gets or sets the column to order by. Possible
        /// values include: 'ID', 'Type', 'Name', 'Alias'</param>
        public GetQueueModel(int? id = default(int?), string name = default(string), string alias = default(string), string type = default(string), int? access = default(int?), bool? bypassSecurity = default(bool?), int? page = default(int?), int? pageSize = default(int?), string sortOrder = default(string), string sortBy = default(string))
        {
            ID = id;
            Name = name;
            Alias = alias;
            Type = type;
            Access = access;
            BypassSecurity = bypassSecurity;
            Page = page;
            PageSize = pageSize;
            SortOrder = sortOrder;
            SortBy = sortBy;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the queue identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ID")]
        public int? ID { get; set; }

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "Name")]
        public string Name { get; set; }

        /// <summary>
        /// Gets or sets the alias.
        /// </summary>
        [JsonProperty(PropertyName = "Alias")]
        public string Alias { get; set; }

        /// <summary>
        /// Gets or sets the type. Possible values include: 'Inbound',
        /// 'Outbound', 'Access', 'Any', 'Shared', 'Public', 'Recycle', 'Fax',
        /// 'Print', 'Scan', 'Ocr', 'Workflow', 'Schedule', 'System', 'Other',
        /// 'CdoInfostore', 'CdoFolder'
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public string Type { get; set; }

        /// <summary>
        /// Gets or sets the access level.
        /// </summary>
        [JsonProperty(PropertyName = "Access")]
        public int? Access { get; set; }

        /// <summary>
        /// Gets or sets a value indicating whether to bypass security checks.
        /// </summary>
        [JsonProperty(PropertyName = "BypassSecurity")]
        public bool? BypassSecurity { get; set; }

        /// <summary>
        /// Gets or sets the page number.
        /// </summary>
        [JsonProperty(PropertyName = "Page")]
        public int? Page { get; set; }

        /// <summary>
        /// Gets or sets the size of the page.
        /// </summary>
        [JsonProperty(PropertyName = "PageSize")]
        public int? PageSize { get; set; }

        /// <summary>
        /// Gets or sets the order. Possible values include: 'Unspecified',
        /// 'Ascending', 'Descending'
        /// </summary>
        [JsonProperty(PropertyName = "SortOrder")]
        public string SortOrder { get; set; }

        /// <summary>
        /// Gets or sets the column to order by. Possible values include: 'ID',
        /// 'Type', 'Name', 'Alias'
        /// </summary>
        [JsonProperty(PropertyName = "SortBy")]
        public string SortBy { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (ID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "ID", 2147483647);
            }
            if (ID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "ID", 1);
            }
            if (Name != null)
            {
                if (Name.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Name", 255);
                }
                if (Name.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Name", 0);
                }
            }
            if (Alias != null)
            {
                if (Alias.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Alias", 255);
                }
                if (Alias.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Alias", 0);
                }
            }
            if (Page > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "Page", 2147483647);
            }
            if (Page < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "Page", 1);
            }
            if (PageSize > 1000)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "PageSize", 1000);
            }
            if (PageSize < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "PageSize", 1);
            }
        }
    }
}
